<?php

namespace App\DataFixtures;

use App\Entity\Torrent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $torrent = new Torrent("Рэй Донован: Фильм / Ray Donovan: The Movie (2022) WEB-DL 4K Dolby Vision [AMAZON]",
        "RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K_DV_HDR10_ENCODER_USB_LOGAN.mkv.torrent",
        '<p><b style="color:#9A9170">Оригинальное название:</b> Ray Donovan: The Movie</p>
        <p><b style="color:#9A9170">Год выхода:</b> 2022</p>
        <p><b style="color:#9A9170">Выпущено:</b> США</p>
        <p><b style="color:#9A9170">Жанр:</b> драма</p>
        <p><b style="color:#9A9170">Режиссер:</b> Дэвид Холландер</p>
        <p><b style="color:#9A9170">В ролях:</b> Лив Шрайбер, Кэррис Дорси, Джон Войт, Керри Кондон, Эдди Марсан, Алан Алда, Дэш Майок, Дэвид Патрик Келли, Кэтрин Монниг, ЭйДжей Мичалка</p>
        
        <p><b style="color:#9A9170">О фильме:</b></p>
         Рэй должен найти своего сбежавшего отца Микки, пока тот не устроил очередное кровопролитие.</p>
        
        <p><span style="text-align: center;"><b style="color:teal">«Ты не можешь убежать от своего наследия»</b></span></p>
        
        <p><b style="color:#9A9170">Продолжительность:</b> 01:40:57</p>',
        "Ray Donovan: The Movie, 2022, США, драма, Дэвид Холландер, Лив Шрайбер, Кэррис Дорси, Джон Войт, Керри Кондон, Эдди Марсан, Алан Алда, Дэш Майок, Дэвид Патрик Келли, Кэтрин Монниг, ЭйДжей Мичалка, 4K, HDR10, DV, Dolby Vision, AMAZON, ",
        1,
        "https://files.cinemahd.box.ca/menu_trailers/RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K.menu.mp4",
        "",
        "https://files.cinemahd.box.ca/video_avc/RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K_DV_ENCODER_LOGAN.mp4",
        "https://files.cinemahd.box.ca/video_hevc/RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K_DV_HDR10_ENCODER_LOGAN.mp4",
        "",
        "",
        ["DV"],
        "RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K.rus-amazon.vtt
        RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K.eng-full.vtt
        RAY_DONOVAN_THE_MOVIE_2022_WEB-DL_4K.eng-sdh.vtt",
        ["PG-18"],
        ["4K", "DV", "HDR10", "AAC 5.1"],
        "");
        $manager->persist($torrent);

        $torrent2 = new Torrent("Восстание / Revolt (2017) Blu-ray RMX 1080P",
        "REVOLT_2017_BD_1080P_ENCODER_USB_LOGAN.mkv.torrent",
        '<p><b style="color:#9A9170">Оригинальное название:</b> Revolt</p>
        <p><b style="color:#9A9170">Год выхода:</b> 2017</p>
        <p><b style="color:#9A9170">Выпущено:</b> Великобритания, ЮАР</p>
        <p><b style="color:#9A9170">Жанр:</b> фантастика, боевик, приключения</p>
        <p><b style="color:#9A9170">Режиссер:</b> Джо Миэйл</p>
        <p><b style="color:#9A9170">В ролях:</b> Ли Пейс, Беренис Марло, Эми Луиз Уилсон, Алан Сантини, Том Фэйрфут, Кеннет Фок, Эдвин Джей, Карл Роддам</p>
        
        <p><b style="color:#9A9170">О фильме:</b></p>
        <p>Постапокалиптический триллер о последнем оплоте человечества после сокрушительного натиска инопланетян. Американский солдат и молодая француженка объединяются в поисках убежища среди африканской пустоши, обезображенной войной.</p>
        
        <p><b style="color:#9A9170">Продолжительность:</b> 01:27:16</p>',
        "Revolt, 2017, Великобритания, ЮАР, фантастика, боевик, приключения, Джо Миэйл, Ли Пейс, Беренис Марло, Эми Луиз Уилсон, Алан Сантини, Том Фэйрфут, Кеннет Фок, Эдвин Джей, Карл Роддам, ",
        1,
        "",
        "https://files.cinemahd.box.ca/poster/REVOLT_2017_BD_1080P.menu.jpg",
        "https://files.cinemahd.box.ca/video_avc/REVOLT_2017_BD_1080_ENCODER_LOGAN.mp4",
        "https://files.cinemahd.box.ca/video_hevc/REVOLT_2017_BD_1080P_ENCODER_LOGAN.mp4",
        "",
        "",
        ["8 BITS", "10 BITS"],
        "REVOLT_2017_BD_1080P.rus-forced.vtt
        REVOLT_2017_BD_1080P.rus-full.vtt
        REVOLT_2017_BD_1080P.eng-full.vtt",
        ["PG-18"],
        ["1080P", "SDR", "AAC 5.1"],
        "");
        $manager->persist($torrent2);

        $manager->flush();
    }
}