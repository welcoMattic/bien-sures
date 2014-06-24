<?php

class ApiController extends \BaseController {

  public function index()
  {
    $adjectifs = '[{"adjectif":"agressive","synonymes":"acérée, amère, âpre, ardente, bagarreuse, batailleuse, belliqueuse, brutale, coléreuse, colérique, combattive, dangereuse, fonceuse, méchante, menaçante, mordante, offensive, querelleuse, vive"},{"adjectif":"arrogante","synonymes":"audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure"},{"adjectif":"compétitive","synonymes":"combattante, concurrente, rivale"},{"adjectif":"désagréable","synonymes":"acariâtre, acerbe, acide, âcre, aigre, amère, antipathique, contrariante, déplaisant, désobligeante, détestable, discordante, disgracieuse, embêtante, emmerdante, gênante, haïssable, impolie, inamicale, incommodante, insupportable, intolérable, irritante, malplaisante, moche, nauséabonde, odieuse, pesante, puante, rebutante, repoussante, rude, sèche, vexante"},{"adjectif":"égoïste","synonymes":"avare, égocentrique, individualiste, ingrate, narcissique, personnelle"},{"adjectif":"hypocrite","synonymes":"à double face, artificieuse, comédienne, déguisée, dissimulatrice, dissimulée, double, double-jeu, fausse, faux jeton, fourbe, insincère, mensongée, menteuse, mielleuse, secrète, simulatrice, simulée, sournoise, tartuffarde, tordue, trompeuse"},{"adjectif":"imposante","synonymes":"écrasante, impressionnante, magistrale, orgueilleuse, royale, stupéfiante, théâtrale"},{"adjectif":"indifférent","synonymes":"anodine, banale, blasée, dédaigneuse, désintéressée, désinvolte, détachée, distante, froide, impartiale, impassible, imperturbable, insignifiante, je-m\'en-foutiste, négligente, neutre, nonchalante, passive, quelconque, stoïque"},{"adjectif":"insupportable","synonymes":"accablante, agaçante, atroce, cruelle, énervante, exaspérante, haïssable, horrible, incommode, infernale, massacrante, mauvaise, méchante, nauséabonde, odieuse, pénible"},{"adjectif":"malicieuse","synonymes":"astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, moqueuse, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie"},{"adjectif":"moqueuse","synonymes":"blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique"},{"adjectif":"nerveuse","synonymes":"agitée, brusque, énervée, excitée, hystérique, impatiente, hystérique, irritée, névrosée"},{"adjectif":"active","synonymes":"affairée, dynamique, efficace, énergique, entreprenante, éveillée, expéditive, militante"},{"adjectif":"affectueuse","synonymes":"affective, affectionnée, aimante, amicale, attentife, bonne, chaleureuse, cordiale, douce, fraternelle, gentille, sensible, sentimentale, tendre"},{"adjectif":"agréable","synonymes":"accommodante, accueillante, aimable, bien élevée, bienséant, charmante, chic, chouette, commode, convenable, délectable, délicate, délicieux, distinguée, élégante, fameuse, favorable, gaie, gentille, heureuse, joyeuse, légère, plaisante, rieuse, sociable, sympa, sympathique, vivable, courtoise, coquette, aristocratique, bien tournée, de bon goût, élancée, pimpante, raffinée, soignée, travaillée"},{"adjectif":"compréhensive","synonymes":"bienveillante, compatissante, humaine, indulgente, intelligente, ouverte, souple, tolérante"},{"adjectif":"disciplinée","synonymes":"méthodique, organisée, réglée, sage"},{"adjectif":"dynamique","synonymes":"active, énergique, vivante"},{"adjectif":"honnête","synonymes":"acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine"},{"adjectif":"intelligente","synonymes":"adroite, astucieuse, brillante, compétente, douée, expérimentée, fine, habile, ingénieuse, instruite, judicieuse, lucide, perçante, perspicace, pertinente, sensée, spirituelle, subtile, responsable, adulte"},{"adjectif":"sérieuse","synonymes":"alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage"},{"adjectif":"courageuse","synonymes":"audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse"},{"adjectif":"créative","synonymes":"innovante, inventive"},{"adjectif":"décidée","synonymes":"affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide"},{"adjectif":"têtu","synonymes":"acharnée, butée, cabocharde, entêtée, entière, ferme, insoumise, intraitable, mutine, obstinée, persévérante, résistante, résolue, tenace"},{"adjectif":"vigoureuse","synonymes":"expressive, farouche, fringante"},{"adjectif":"complexée","synonymes":"bloquée, coincée, inhibée, refoulée"},{"adjectif":"débrouillarde","synonymes":"adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace"},{"adjectif":"fière","synonymes":"conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}] ';
    return View::make('api.index')
      ->with(['adjectifs' => json_encode($adjectifs)]);
  }

}