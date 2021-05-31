//        if($request->score1 == $request->score2){
//            $wedstrijd->winnaarID = null;
//        }
//        if($request->score1 > $request->score2){
//            $wedstrijd->winnaarID = $request->speler1;
//        }elseif($request->score2 > $request->score1){
//            $wedstrijd->winnaarID = $request->speler2;
//        }
//
//        $wedstrijd->save();
//
//        // $speler = new Player();
//        $speler->neemtDeel = 0;
//
//        // speler is alleen te selecteren voor een wedstrijd wanneer neemtDeel = false = 0
//        SELECT id, voornaam, tussenvoegsel, achternaam FROM speler WHERE neemtDeel = 0;
//
//        // wanneer speler ingedeeld wordt voor wedstrijd, zorg je ervoor dat deelname op 1 wordt gezet:
//        UPDATE speler SET neemtDeel=1 WHERE spelerID in (id1, id2);
//
//        // speler moet geupdate worden als een potje is afgemaakt (dus de score bekend is en ingevuld wordt).
//        // Dan moet de speler deelname weer op 0 gezet worden.
//        UPDATE speler SET neemtDeel = 0 WHERE spelerID in (id1, id2);
