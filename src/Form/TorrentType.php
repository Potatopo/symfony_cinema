<?php

namespace App\Form;

use App\Entity\Torrent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TorrentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('filename')
            ->add('save_as')
            ->add('size')
            ->add('player', ChoiceType::class, [
                'choices'  => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5
                ],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('image', FileType::class, [
                'mapped' => false,
                'required'=> is_null($builder->getData()->getId())
            ])
            ->add('trailer')
            ->add('poster', null, [
                'empty_data' => ''
            ])
            ->add('video_avc', null, [
                'empty_data' => ''
            ])
            ->add('video_hevc', null, [
                'empty_data' => ''
            ])
            ->add('video_dash', null, [
                'empty_data' => ''
            ])
            ->add('video_hls', null, [
                'empty_data' => ''
            ])
            ->add('features', ChoiceType::class, [
                'choices'  => [
                    '8BIT' => '8 BIT',
                    '10BIT' => '10 Bit',
                    'DV' => 'DV'
                ],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('captions')
            ->add('description')
            ->add('extra_info', null, [
                'empty_data' => ''
            ])
            ->add('pg', ChoiceType::class, [
                'choices'  => [
                    'PG-6' => 'PG-6',
                    'PG-8' => 'PG-8',
                    'PG-10' => 'PG-10',
                    'PG-12' => 'PG-12',
                    'PG-13' => 'PG-13',
                    'PG-14' => 'PG-14',
                    'PG-16' => 'PG-16',
                    'PG-18' => 'PG-18'
                ],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('support', ChoiceType::class, [
                'choices'  => [
                    '4K' => '4K',
                    '1080P' => '1080P',
                    'DV' => 'DV',
                    'HDR10+' => 'HDR10+',
                    'HDR10' => 'HDR10',
                    'HDR' => 'HDR',
                    'SDR' => 'SDR',
                    'ATMOS' => 'ATMOS',
                    'DOLBY DIGITAL' => 'DOLBY DIGITAL',
                    'AAC 7.1' => 'AAC 7.1',
                    'AAC 5.1' => 'AAC 5.1',
                    'AAC 2.0' => 'AAC 2.0',
                    'SDH COLOR' => 'SDH COLOR',
                    'SDH' => 'SDH',
                    'EXTRAS' => 'EXTRAS'
                ],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('keywords')
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Torrent::class,
        ]);
    }
}
