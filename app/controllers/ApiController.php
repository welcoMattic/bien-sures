<?php

class ApiController extends \BaseController {

  public function index()
  {
    $videos = [
      [
        'file' => 'video1',
        'end1' => json_decode('{"timecode":"18","adjectifs":"malicieuse, astucieuse, coquine, espiègle, sympathique, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, décidée, affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide, débrouillarde ,adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end2' => json_decode('{"timecode":"45","adjectifs":"arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, vigoureuse, expressive, farouche, fringante, complexée, bloquée, coincée, inhibée, refoulée"}',
          true),
        'end3' => json_decode('{"timecode":"68","adjectifs":"honnête, acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine, créative, innovante, inventive"}',
          true),
        'end4' => json_decode('{"timecode":"97","adjectifs":"malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, sérieuse, alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage, courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, disciplinée, méthodique, organisée, réglée, sage"}',
          true),
      ],
      [
        'file' => 'video3',
        'end1' => json_decode('{"timecode":"18","adjectifs":"malicieuse, astucieuse, coquine, espiègle, sympathique, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, décidée, affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide, débrouillarde ,adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end2' => json_decode('{"timecode":"45","adjectifs":"arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, vigoureuse, expressive, farouche, fringante, complexée, bloquée, coincée, inhibée, refoulée"}',
          true),
        'end3' => json_decode('{"timecode":"68","adjectifs":"honnête, acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine, créative, innovante, inventive"}',
          true),
        'end4' => json_decode('{"timecode":"97","adjectifs":"malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, sérieuse, alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage, courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, disciplinée, méthodique, organisée, réglée, sage"}',
          true),
      ],
      [
        'file' => 'video2',
        'end1' => json_decode('{"timecode":"18","adjectifs":"malicieuse, astucieuse, coquine, espiègle, sympathique, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, décidée, affirmée, arrêtée, assurée, audacieuse, carrée, certaine, convaincue, décisive, déterminée, ferme, fixée, intrépide, débrouillarde ,adroite, astucieuse, dégourdie, futée, habile, ingénieuse, perspicace, fière, conquérante, dédaigneuse, digne, entière, fameuse, hautaine, impétueuse, orgueilleuse, présomptueuse, prétentieuse, suffisante, supérieure, vaniteuse"}',
          true),
        'end2' => json_decode('{"timecode":"45","adjectifs":"arrogante, audacieuce, cavalière, condescendante, dédaigneuse, désinvolte, fière, hardie, hautaine, insolente, méprisante, orgueilleuse, présomptueuse, prétentieuse, provocante, supérieure, moqueuse, blagueuse, dérisoire, facétieuse, farceuse, goguenarde, humoristique, ironique, pince-sans-rire, ricaneuse, sarcastique, vigoureuse, expressive, farouche, fringante, complexée, bloquée, coincée, inhibée, refoulée"}',
          true),
        'end3' => json_decode('{"timecode":"68","adjectifs":"honnête, acceptable, civile, comme il faut, courtoise, de bon ton, décente, droite, franche, honorable, incorruptible, intègre, irréprochable, juste, légale, licite, louable, loyale, morale, naturelle, polie,  raisonnable, respectable, sage, urbaine, sincère, authentique, certaine, créative, innovante, inventive"}',
          true),
        'end4' => json_decode('{"timecode":"97","adjectifs":"malicieuse, astucieuse, coquine, espiègle, farceuse, finaude, friponne, futée, gamine, ironique, maligne, mutine, narquoise, piquante, railleuse, roublarde, rusée, taquine, comique, cocasse, clownesque, burlesque, désopilante, distrayante, divertissante, drôle, farceuse, hilarante, humoristique, marante, rigolote, tordante, machiavélique, débrouillarde, dégourdie, sérieuse, alarmante, appliquée, approfondie, calme, consciencieuse, convenable, critique, raisonnable, sage, courageuse, audacieuse, brave, confiante, culottée, décidée, déterminée, ferme, fière, intrépide, vaillante, valeureuse, disciplinée, méthodique, organisée, réglée, sage"}',
          true),
      ],
    ];

    return View::make('api.index')
      ->with(['videos' => json_encode($videos)]);
  }

}