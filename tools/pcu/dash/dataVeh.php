<?php
#Cerramos conexiones sin logeo
if (isset($_SESSION['logeado']) != "Si") {
  exit();
}
?>
<?php
function ObtenerMaltero($i)
            {
                switch ($i)
                {
                    case 403:
                        $maletero = 8;
                        return $maletero;
                    case 413:
                        $maletero = 8;
                        return $maletero;
                    case 414:
                        $maletero = 8;
                        return $maletero;
                    case 431:
                        $maletero = 8;
                        return $maletero;
                    case 437:
                        $maletero = 8;
                        return $maletero;
                    case 440:
                        $maletero = 8;
                        return $maletero;
                    case 443:
                        $maletero = 8;
                        return $maletero;
                    case 459:
                        $maletero = 8;
                        return $maletero;
                    case 482:
                        $maletero = 8;
                        return $maletero;
                    case 499:
                        $maletero = 8;
                        return $maletero;
                    case 514:
                        $maletero = 8;
                        return $maletero;
                    case 515:
                        $maletero = 8;
                        return $maletero;
                    case 578:
                        $maletero = 8;
                        return $maletero;
                    case 400:
                        $maletero = 6;
                        return $maletero;
                    case 404:
                        $maletero = 6;
                        return $maletero;
                    case 418:
                        $maletero = 6;
                        return $maletero;
                    case 422:
                        $maletero = 6;
                        return $maletero;
                    case 470:
                        $maletero = 6;
                        return $maletero;
                    case 478:
                        $maletero = 6;
                        return $maletero;
                    case 489:
                        $maletero = 6;
                        return $maletero;
                    case 495:
                        $maletero = 6;
                        return $maletero;
                    case 505:
                        $maletero = 6;
                        return $maletero;
                    case 543:
                        $maletero = 6;
                        return $maletero;
                    case 554:
                        $maletero = 6;
                        return $maletero;
                    case 579:
                        $maletero = 6;
                        return $maletero;
                    case 605:
                        $maletero = 6;
                        return $maletero;
                    case 448:
                        $maletero = 0;
                        return $maletero;
                    case 461:
                        $maletero = 0;
                        return $maletero;
                    case 462:
                        $maletero = 0;
                        return $maletero;
                    case 463:
                        $maletero = 0;
                        return $maletero;
                    case 468:
                        $maletero = 0;
                        return $maletero;
                    case 471:
                        $maletero = 0;
                        return $maletero;
                    case 521:
                        $maletero = 0;
                        return $maletero;
                    case 522:
                        $maletero = 0;
                        return $maletero;
                    case 581:
                        $maletero = 0;
                        return $maletero;
                    case 586:
                        $maletero = 0;
                        return $maletero;
                    case 481:
                        $maletero = 0;
                        return $maletero;
                    case 509:
                        $maletero = 0;
                        return $maletero;
                    case 510:
                        $maletero = 0;
                        return $maletero;
                    default:
                        $maletero = 4;
                        return $maletero;
                }
            }
            function GetVehicleName($idveh){
                if ($idveh == 400)
                {
                    return "Landstalker";
                }
                else if ($idveh == 401)
                {
                    return "Bravura";
                }
                else if ($idveh == 402)
                {
                    return "Buffalo";
                }
                else if ($idveh == 403)
                {
                    return "Linerunner";
                }
                else if ($idveh == 404)
                {
                    return "Perenniel";
                }
                else if ($idveh == 405)
                {
                    return "Sentinel";
                }
                else if ($idveh == 406)
                {
                    return "Dumper";
                }
                else if ($idveh == 407)
                {
                    return "Firetruck";
                }
                else if ($idveh == 408)
                {
                    return "Trashmaster";
                }
                else if ($idveh == 409)
                {
                    return "Stretch";
                }
                else if ($idveh == 410)
                {
                    return "Manana";
                }
                else if ($idveh == 411)
                {
                    return "Infernus";
                }
                else if ($idveh == 412)
                {
                    return "Voodoo";
                }
                else if ($idveh == 413)
                {
                    return "Pony";
                }
                else if ($idveh == 414)
                {
                    return "Mule";
                }
                else if ($idveh == 415)
                {
                    return "Cheetah";
                }
                else if ($idveh == 416)
                {
                    return "Ambulancia";
                }
                else if ($idveh == 417)
                {
                    return "Leviathan";
                }
                else if ($idveh == 418)
                {
                    return "Moonbeam";
                }
                else if ($idveh == 419)
                {
                    return "Esperanto";
                }
                else if ($idveh == 420)
                {
                    return "Taxi";
                }
                else if ($idveh == 421)
                {
                    return "Washington";
                }
                else if ($idveh == 422)
                {
                    return "Bobcat";
                }
                else if ($idveh == 423)
                {
                    return "MrWhoopee";
                }
                else if ($idveh == 424)
                {
                    return "BFInjection";
                }
                else if ($idveh == 425)
                {
                    return "Hunter";
                }
                else if ($idveh == 426)
                {
                    return "Premier";
                }
                else if ($idveh == 427)
                {
                    return "Enforcer";
                }
                else if ($idveh == 428)
                {
                    return "Securicar";
                }
                else if ($idveh == 429)
                {
                    return "Banshee";
                }
                else if ($idveh == 430)
                {
                    return "Predator";
                }
                else if ($idveh == 431)
                {
                    return "Bus";
                }
                else if ($idveh == 432)
                {
                    return "Rhino";
                }
                else if ($idveh == 433)
                {
                    return "Barracks";
                }
                else if ($idveh == 434)
                {
                    return "Hotknife";
                }
                else if ($idveh == 435)
                {
                    return "+Trailer";
                }
                else if ($idveh == 436)
                {
                    return "Previon";
                }
                else if ($idveh == 437)
                {
                    return "Coach";
                }
                else if ($idveh == 438)
                {
                    return "Cabbie";
                }
                else if ($idveh == 439)
                {
                    return "Stallion";
                }
                else if ($idveh == 440)
                {
                    return "Rumpo";
                }
                else if ($idveh == 441)
                {
                    return "RCBandit";
                }
                else if ($idveh == 442)
                {
                    return "Romero";
                }
                else if ($idveh == 443)
                {
                    return "Packer";
                }
                else if ($idveh == 444)
                {
                    return "Monster";
                }
                else if ($idveh == 445)
                {
                    return "Admiral";
                }
                else if ($idveh == 446)
                {
                    return "Squalo";
                }
                else if ($idveh == 447)
                {
                    return "Seasparrow";
                }
                else if ($idveh == 448)
                {
                    return "Pizzaboy";
                }
                else if ($idveh == 449)
                {
                    return "Tram";
                }
                else if ($idveh == 450)
                {
                    return "+Trailer";
                }
                else if ($idveh == 451)
                {
                    return "Turismo";
                }
                else if ($idveh == 452)
                {
                    return "Speeder";
                }
                else if ($idveh == 453)
                {
                    return "Reefer";
                }
                else if ($idveh == 454)
                {
                    return "Tropic";
                }
                else if ($idveh == 455)
                {
                    return "Flatbed";
                }
                else if ($idveh == 456)
                {
                    return "Yankee";
                }
                else if ($idveh == 457)
                {
                    return "Caddy";
                }
                else if ($idveh == 458)
                {
                    return "Solair";
                }
                else if ($idveh == 459)
                {
                    return "TopfunVan";
                }
                else if ($idveh == 460)
                {
                    return "Skimmer";
                }
                else if ($idveh == 461)
                {
                    return "PCJ-600";
                }
                else if ($idveh == 462)
                {
                    return "Faggio";
                }
                else if ($idveh == 463)
                {
                    return "Freeway";
                }
                else if ($idveh == 464)
                {
                    return "RCBaron";
                }
                else if ($idveh == 465)
                {
                    return "RCRaider";
                }
                else if ($idveh == 466)
                {
                    return "Glendale";
                }
                else if ($idveh == 467)
                {
                    return "Oceanic";
                }
                else if ($idveh == 468)
                {
                    return "Sanchez";
                }
                else if ($idveh == 469)
                {
                    return "Sparrow";
                }
                else if ($idveh == 470)
                {
                    return "Patroit";
                }
                else if ($idveh == 471)
                {
                    return "Quad";
                }
                else if ($idveh == 472)
                {
                    return "Coastguard";
                }
                else if ($idveh == 473)
                {
                    return "Dinghy";
                }
                else if ($idveh == 474)
                {
                    return "Hermes";
                }
                else if ($idveh == 475)
                {
                    return "Sabre";
                }
                else if ($idveh == 476)
                {
                    return "Rustler";
                }
                else if ($idveh == 477)
                {
                    return "ZR-350";
                }
                else if ($idveh == 478)
                {
                    return "Walton";
                }
                else if ($idveh == 479)
                {
                    return "Regina";
                }
                else if ($idveh == 480)
                {
                    return "Comet";
                }
                else if ($idveh == 481)
                {
                    return "BMX";
                }
                else if ($idveh == 482)
                {
                    return "Burrito";
                }
                else if ($idveh == 483)
                {
                    return "Camper";
                }
                else if ($idveh == 484)
                {
                    return "Marquis";
                }
                else if ($idveh == 485)
                {
                    return "Baggage";
                }
                else if ($idveh == 486)
                {
                    return "Dozer";
                }
                else if ($idveh == 487)
                {
                    return "Maverik";
                }
                else if ($idveh == 488)
                {
                    return "HeliNews";
                }
                else if ($idveh == 489)
                {
                    return "Rancher";
                }
                else if ($idveh == 490)
                {
                    return "FBIRancher";
                }
                else if ($idveh == 491)
                {
                    return "Virgo";
                }
                else if ($idveh == 492)
                {
                    return "Greenwood";
                }
                else if ($idveh == 493)
                {
                    return "Jetmax";
                }
                else if ($idveh == 494)
                {
                    return "H.R.";
                }
                else if ($idveh == 495)
                {
                    return "Sandking";
                }
                else if ($idveh == 496)
                {
                    return "Blista C.";
                }
                else if ($idveh == 497)
                {
                    return "P. Maverik";
                }
                else if ($idveh == 498)
                {
                    return "Boxville";
                }
                else if ($idveh == 499)
                {
                    return "Benson";
                }
                else if ($idveh == 500)
                {
                    return "Mesa";
                }
                else if ($idveh == 501)
                {
                    return "RCGoblin";
                }
                else if ($idveh == 502)
                {
                    return "H.R.";
                }
                else if ($idveh == 503)
                {
                    return "H.R.";
                }
                else if ($idveh == 504)
                {
                    return "B.B.";
                }
                else if ($idveh == 505)
                {
                    return "Rancher";
                }
                else if ($idveh == 506)
                {
                    return "SuperGT";
                }
                else if ($idveh == 507)
                {
                    return "Elegant";
                }
                else if ($idveh == 508)
                {
                    return "Journey";
                }
                else if ($idveh == 509)
                {
                    return "Bike";
                }
                else if ($idveh == 510)
                {
                    return "M.Bike";
                }
                else if ($idveh == 511)
                {
                    return "Beagle";
                }
                else if ($idveh == 512)
                {
                    return "Cropduster";
                }
                else if ($idveh == 513)
                {
                    return "Stuntplane";
                }
                else if ($idveh == 514)
                {
                    return "Tanker";
                }
                else if ($idveh == 515)
                {
                    return "Roadtrain";
                }
                else if ($idveh == 516)
                {
                    return "Nebula";
                }
                else if ($idveh == 517)
                {
                    return "Majestic";
                }
                else if ($idveh == 518)
                {
                    return "Buccaneer";
                }
                else if ($idveh == 519)
                {
                    return "Shamal";
                }
                else if ($idveh == 520)
                {
                    return "Hydra";
                }
                else if ($idveh == 521)
                {
                    return "FCR-900";
                }
                else if ($idveh == 522)
                {
                    return "NRG-500";
                }
                else if ($idveh == 523)
                {
                    return "HPV1000";
                }
                else if ($idveh == 524)
                {
                    return "C.Truck";
                }
                else if ($idveh == 525)
                {
                    return "Towtruck";
                }
                else if ($idveh == 526)
                {
                    return "Fortune";
                }
                else if ($idveh == 527)
                {
                    return "Cadrona";
                }
                else if ($idveh == 528)
                {
                    return "FBITruck";
                }
                else if ($idveh == 529)
                {
                    return "Willard";
                }
                else if ($idveh == 530)
                {
                    return "Forklift";
                }
                else if ($idveh == 531)
                {
                    return "Tractor";
                }
                else if ($idveh == 532)
                {
                    return "C.Harvester";
                }
                else if ($idveh == 533)
                {
                    return "Feltzer";
                }
                else if ($idveh == 534)
                {
                    return "Remington";
                }
                else if ($idveh == 535)
                {
                    return "Slamvan";
                }
                else if ($idveh == 536)
                {
                    return "Blade";
                }
                else if ($idveh == 537)
                {
                    return "Freight";
                }
                else if ($idveh == 538)
                {
                    return "Brownstreak";
                }
                else if ($idveh == 539)
                {
                    return "Vortex";
                }
                else if ($idveh == 540)
                {
                    return "Vincent";
                }
                else if ($idveh == 541)
                {
                    return "Bullet";
                }
                else if ($idveh == 542)
                {
                    return "Clover";
                }
                else if ($idveh == 543)
                {
                    return "Sadler";
                }
                else if ($idveh == 544)
                {
                    return "Firetruck";
                }
                else if ($idveh == 545)
                {
                    return "Hustler";
                }
                else if ($idveh == 546)
                {
                    return "Intruder";
                }
                else if ($idveh == 547)
                {
                    return "Primo";
                }
                else if ($idveh == 548)
                {
                    return "Cargobob";
                }
                else if ($idveh == 549)
                {
                    return "Tampa";
                }
                else if ($idveh == 550)
                {
                    return "Sunrise";
                }
                else if ($idveh == 551)
                {
                    return "Merit";
                }
                else if ($idveh == 552)
                {
                    return "UtilityVan";
                }
                else if ($idveh == 553)
                {
                    return "Nevada";
                }
                else if ($idveh == 554)
                {
                    return "Yosemite";
                }
                else if ($idveh == 555)
                {
                    return "Windsor";
                }
                else if ($idveh == 556)
                {
                    return "MonsterT1";
                }
                else if ($idveh == 557)
                {
                    return "MonsterT2";
                }
                else if ($idveh == 558)
                {
                    return "Uranus";
                }
                else if ($idveh == 559)
                {
                    return "Jester";
                }
                else if ($idveh == 560)
                {
                    return "Sultan";
                }
                else if ($idveh == 561)
                {
                    return "Stratum";
                }
                else if ($idveh == 562)
                {
                    return "Elegy";
                }
                else if ($idveh == 563)
                {
                    return "Raindance";
                }
                else if ($idveh == 564)
                {
                    return "RCTiger";
                }
                else if ($idveh == 565)
                {
                    return "Flash";
                }
                else if ($idveh == 566)
                {
                    return "Tahoma";
                }
                else if ($idveh == 567)
                {
                    return "Savanna";
                }
                else if ($idveh == 568)
                {
                    return "Bandito";
                }
                else if ($idveh == 569)
                {
                    return "+Train";
                }
                else if ($idveh == 570)
                {
                    return "+Train";
                }
                else if ($idveh == 571)
                {
                    return "Kart";
                }
                else if ($idveh == 572)
                {
                    return "Mower";
                }
                else if ($idveh == 573)
                {
                    return "Dune";
                }
                else if ($idveh == 574)
                {
                    return "Sweepeer";
                }
                else if ($idveh == 575)
                {
                    return "Broadway";
                }
                else if ($idveh == 576)
                {
                    return "Tornado";
                }
                else if ($idveh == 577)
                {
                    return "AT400";
                }
                else if ($idveh == 578)
                {
                    return "DFT-30";
                }
                else if ($idveh == 579)
                {
                    return "Huntley";
                }
                else if ($idveh == 580)
                {
                    return "Stafford";
                }
                else if ($idveh == 581)
                {
                    return "BF-400";
                }
                else if ($idveh == 582)
                {
                    return "Newsvan";
                }
                else if ($idveh == 583)
                {
                    return "Tug";
                }
                else if ($idveh == 584)
                {
                    return "+Trailer";
                }
                else if ($idveh == 585)
                {
                    return "Emperor";
                }
                else if ($idveh == 586)
                {
                    return "Wayfarer";
                }
                else if ($idveh == 587)
                {
                    return "Euros";
                }
                else if ($idveh == 588)
                {
                    return "Hotdog";
                }
                else if ($idveh == 589)
                {
                    return "Club";
                }
                else if ($idveh == 590)
                {
                    return "+Train";
                }
                else if ($idveh == 591)
                {
                    return "+Trailer";
                }
                else if ($idveh == 592)
                {
                    return "Andromada";
                }
                else if ($idveh == 593)
                {
                    return "Dodo";
                }
                else if ($idveh == 594)
                {
                    return "RCCam";
                }
                else if ($idveh == 595)
                {
                    return "Launch";
                }
                else if ($idveh == 596)
                {
                    return "LSPD";
                }
                else if ($idveh == 597)
                {
                    return "SFPD";
                }
                else if ($idveh == 598)
                {
                    return "LVPD";
                }
                else if ($idveh == 599)
                {
                    return "Ranger";
                }
                else if ($idveh == 600)
                {
                    return "Picador";
                }
                else if ($idveh == 601)
                {
                    return "S.W.A.T.";
                }
                else if ($idveh == 602)
                {
                    return "Alpha";
                }
                else if ($idveh == 603)
                {
                    return "Phoenix";
                }
                else if ($idveh == 604)
                {
                    return "Glendale";
                }
                else if ($idveh == 605)
                {
                    return "Sadler";
                }
                else if ($idveh == 606)
                {
                    return "+Trailer";
                }
                else if ($idveh == 607)
                {
                    return "+Trailer";
                }
                else if ($idveh == 608)
                {
                    return "+Trailer";
                }
                else if ($idveh == 609)
                {
                    return "Boxville";
                }
                else if ($idveh == 610)
                {
                    return "+Trailer";
                }
                else if ($idveh == 611)
                {
                    return "+Trailer";
                }
                else
                {
                    return "Unknow";
                }
            }?>