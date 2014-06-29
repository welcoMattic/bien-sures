<?php

// echo __DIR__ . '/../lib/twitter/tmhOAuth.php';

require __DIR__ . '/../lib/twitter/tmhOAuth.php';

class ApiController extends \BaseController {

  public function index()
  {
    $videos = [
      [
        'file' => 'BienSures_scenario1_1280x720',
        'end1' => json_decode('{"timecode":"18","adjectifs":"pince sans rire, malicieuse, astucieuse, coquine, espiègle, sympathique, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, décidée, affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide, débrouillarde ,adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end2' => json_decode('{"timecode":"45","adjectifs":"arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, vigoureuse, expressive, farouche, fringante, complexée, bloquée, coincée, inhibée, refoulée"}',
          true),
        'end3' => json_decode('{"timecode":"68","adjectifs":"honnête, acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine, créative, innovante, inventive"}',
          true),
        'end4' => json_decode('{"timecode":"97","adjectifs":"malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, sérieuse, alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage, courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, disciplinée, méthodique, organisée, réglée, sage"}',
          true),
      ],
      [
        'file' => 'BienSures_scenario2_1280x720',
        'end1' => json_decode('{"timecode":"38","adjectifs":"pince sans rire, malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, intelligente, adroite, astucieuse, brillante, compétente, douée, expérimentée, fine, habile, ingénieuse, instruite, judicieuse, lucide, perçante, perspicace, pertinente, sensée, spirituelle, subtile, responsable, adulte, créative, innovante, inventive"}',
          true),
        'end2' => json_decode('{"timecode":"67","adjectifs":"courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, décidée, affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide, débrouillarde, adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end3' => json_decode('{"timecode":"91","adjectifs":"agressive, acérée, amère, âpre, ardente, bagarreuse, batailleuse, belliqueuse, brutale, coléreuse, colérique, combattive, dangereuse, fonceuse, méchante, menaçante, mordante, offensive, querelleuse, vive, arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, compétitive, combattante, concurrente, rivale, désagréable, acariâtre, acerbe, acide, âcre, aigre, amère, antipathique, contrariante, déplaisant, désobligeante, détestable, discordante, disgracieuse, embêtante, emmerdante, gênante, haïssable, impolie, inamicale, incommodante, insupportable, intolérable, irritante, malplaisante, moche, nauséabonde, odieuse, pesante, puante, rebutante, repoussante, rude, sèche, vexante, vigoureuse, expressive, farouche, fringante"}',
          true),
        'end4' => json_decode('{"timecode":"122","adjectifs":"indifférente, anodine, banale, blasée, dédaigneuse, désintéressée, désinvolte, détachée, distante, froide, impartiale, impassible, imperturbable, insignifiante, négligente, neutre, nonchalante, passive, quelconque, stoïque, disciplinée, méthodique, organisée, réglée, sage"}',
          true),
      ],
      [
        'file' => 'BienSures_scenario3_1280x720',
        'end1' => json_decode('{"timecode":"79","adjectifs":"pince sans rire, arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, désagréable, acariâtre, acerbe, acide, âcre, aigre, amère, antipathique, contrariante, déplaisant, désobligeante, détestable, discordante, disgracieuse, embêtante, emmerdante, gênante, haïssable, impolie, inamicale, incommodante, insupportable, intolérable, irritante, malplaisante, moche, nauséabonde, odieuse, pesante, puante, rebutante, repoussante, rude, sèche, vexante, créative, innovante, inventive"}',
          true),
        'end2' => json_decode('{"timecode":"105","adjectifs": "compétitive, combattante, concurrente, rivale, malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, disciplinée, méthodique, organisée, réglée, sage, intelligente, adroite, astucieuse, brillante, compétente, douée, expérimentée, fine, habile, ingénieuse, instruite, judicieuse, lucide, perçante, perspicace, pertinente, sensée, spirituelle, subtile, responsable, adulte"}',
          true),
        'end3' => json_decode('{"timecode":"119","adjectifs": "insupportable, accablante, agaçante, atroce, cruelle, énervante, exaspérante, haïssable, horrible, incommode, infernale, massacrante, mauvaise, méchante, nauséabonde, odieuse, pénible, nerveuse, agitée, brusque, énervée, excitée, hystérique, impatiente, hystérique, irritée, névrosée, dynamique, active, énergique, vivante, courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end4' => json_decode('{"timecode":"136","adjectifs": "indifférente, anodine, banale, blasée, dédaigneuse, désintéressée, désinvolte, détachée, distante, froide, impartiale, impassible, imperturbable, insignifiante, négligente, neutre, nonchalante, passive, quelconque, stoïque, compréhensive, bienveillante, compatissante, humaine, indulgente, ouverte, souple, tolérante, honnête, acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine, sérieuse, alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage"}',
          true),
      ],
    ];

    return View::make('api.index')
      ->with(['videos' => json_encode($videos)]);
  }

  public function tweet() {

    
      $tmhOAuth = new tmhOAuth(array(
        'consumer_key' => '',
        'consumer_secret' => '',
        'token' => '',
        'secret' => '',
      ));

      $tmhOAuth->request('POST', $tmhOAuth->url('1.1/statuses/update'), array(
        'status' => utf8_encode($message)
      ));

      if ($tmhOAuth->response['code'] == 200) {
      // En cours de dév, afficher les informations retournées :
      //  $tmhOAuth->pr(json_decode($tmhOAuth->response['response']));
        return TRUE;
      } else {
      // En cours de dév, afficher les informations retournées :
      //  $tmhOAuth->pr(htmlentities($tmhOAuth->response['response']));
        return FALSE;
      }
  }

}