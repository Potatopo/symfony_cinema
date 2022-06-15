<?php

namespace App\Controller;

use App\Entity\Torrent;
use App\Form\TorrentType;
use App\Repository\TorrentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TorrentController extends AbstractController
{
    #[Route('/torrents', name: 'index')]
    public function index(TorrentRepository $torrentRepository): Response
    {
        return $this->render('torrent/index.html.twig', [
            'torrents' => $torrentRepository->findAll()
        ]);
    }

    #[Route('/torrents/{id}', name: 'torrent')]
    public function torrent(int $id, TorrentRepository $torrentRepository): Response
    {
        return $this->render('torrent/details.html.twig', [
            'torrent' => $torrentRepository->findOneById($id)
        ]);
    }

    #[Route('/torrents/edit/{id}', name: 'edit_torrent')]
    public function update(Request $request, int $id, TorrentRepository $torrentRepository): Response
    {
        $torrent = $torrentRepository->findOneById($id);
        $form = $this->createForm(TorrentType::class, $torrent);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $torrent = $form->getData();
            $uploadedFile = $form['image']->getData();
            if($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $torrent->setImage($newFilename);
            }
            $torrentRepository->update($torrent, true);
            $this->addFlash('success', 'Torrent Updated!');
            return $this->redirect("/torrents/" . $torrent->getId());
        }


        return $this->renderForm('torrent/edit.html.twig', [
            'torrent' => $torrentRepository->findOneById($id),
            'form' => $form
        ]);
    }
}
