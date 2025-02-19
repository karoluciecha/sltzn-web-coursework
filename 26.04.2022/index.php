<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Deklaracja przystąpienia do egzaminu</title>
    </head>
    <body>
    <section class="cent">                <h3 id="attach">Załącznik 3</h3>
                <h2 class="title">UCZEŃ / SŁUCHACZ / ABSOLWENT</h2>
                <h2 class="title">DEKLARACJA PRZYSTĄPIENIA DO EGZAMINU</h2><br>
     
    

                <form action="index.php" method="POST" novalidate>
                    <div class="rght">
                        <input type="text" id="cityd" name="cityd" placeholder="miejscowość">
                        <label class="sml" for="cityd">miejscowość, data</label>
                        <input type="text" id="datec" name="datec" placeholder="d d m m r r r r"><br>
                        <label class="sml" for="datec">  d  d  m  m  r  r  r  r</label>
                    </div>
    <p><b>Dane osobowe</b>
        <select id="stutype" name="stutype" class="wide">
            <option value="uczeń">ucznia</option>
            <option value="słuchacz">słuchacza</option>
            <option value="absolwent">absolwenta</option>
        </select>
    (wypełnić drukowanymi literami):</p>
    <label for="lname" class="block">Nazwisko: </label> <input class="wide" type="text" id="lname" name="lname" placeholder="NAZWISKO"><br><br>
    <label for="fname" class="block">Imię (imiona): </label> <input class="wide" type="text" id="fname" name="fname" placeholder="IMIĘ / IMIONA"><br><br>
    <label for="bplace" class="block" >Data i miejsce urodzenia: </label><input class="hwide1" type="text" id="bdate" name="bdate" placeholder="d d m m r r r r"><input class="hwide" type="text" id="bplace" name="bplace" placeholder="MIEJSCE URODZENIA"><br>
    <label for="bdate" class="block1">d  d  m  m  r  r  r  r</label><br><br>
    <label for="pesel" class="block">Numer PESEL: </label> <input class="wide" type="text" id="pesel" name="pesel" placeholder="NUMER PESEL"><br>
    <p class="sml">w przypadku braku numeru PESEL - seria i numer paszportu lub innego dokumentu potwierdzającego tożsamość</p>
    <p><b>Adres korespondencyjny</b> (wypełnić drukowanymi literami):</p>
    <label class="block" for="city">miejscowość: </label> <input class="wide" type="text" id="city" name="city" placeholder="MIEJSCOWOŚĆ"><br><br>
    <label class="block" for="strhome">ulica i numer domu: </label> <input class="wide" type="text" id="strhome" name="strhome" placeholder="ULICA I NUMER DOMU"><br><br>
    <label class="block" for="pcode">kod pocztowy i poczta: </label> <input class="hwide1" type="text" id="pcode" name="pcode" placeholder="KOD POCZTOWY"><input class="hwide" type="text" id="ppost" name="ppost" placeholder="POCZTA"><br><br>
    <label class="block" for="tel"><b>nr telefonu z kierunkowym: </b></label> <input class="hwide2" type="text" id="tel" name="tel" placeholder="NUMER TELEFONU"> <label for="mail"><b>mail: </b></label><input class="hwide3" type="text" id="mail" name="mail" placeholder="ADRES E-MAIL"><br><br><br>
           
    <label for="subm"><b>Deklaruję przystąpienie do egzaminu potwierdzającego kwalifikacje w zawodzie<br>przeprowadzanego w terminie </b></label><input type="text" id="sumb" name="sumb" placeholder="TERMIN"><br><br>


<select id="ozkwal" name="ozkwal" class="wide">
    <option value="info2">INF.02</option>
    <option value="inf03">INF.03</option>
  </select>
  <input class="wide" type="text" id="nkwal" name="nkwal" placeholder="NAZWA KWALIFIKACJI"><br>
 <label class="left" for="ozkwal">oznaczenie kwalifikacji zgodne<br>z podstawą programową</label>
 <label class="right" for="nkwal">nazwa kwalifikacji</label><br><br>
 <select id="sczaw" name="ozkwal" class="wide">
    <option value="elektronik">742117</option>
    <option value="informatyk">351203</option>
    <option value="mechatronik">742118</option>
  </select>
  <input class="wide" type="text" id="nzaw" name="nzaw" placeholder="NAZWA ZAWODU"><br>
 <label class="left" for="sczaw">symbol cyfrowy zawodu</label>
 <label class="right" for="nzaw">nazwa zawodu</label><br><br>

 
    <input type="radio" id="first" name="first" value="first">
    <label for="first"><b> po raz pierwszy* / </b></label>
    <input type="radio" id="returning" name="first" value="returning">
    <label for="returning"><b> po raz kolejny*do części </b></label>
    <input type="radio" id="theory" name="returning" value="theory">
    <label for="theory"><b> pisemnej*, </b></label>
    <input type="radio" id="practise" name="returning" value="practise">
    <label for="practise"><b> praktycznej* </b></label><br>
    <p><b>dostosowania</b></p>
    <input type="radio" id="yes" name="dost" value="yes">
    <label for="yes"><b> TAK* / </b></label>
    <input type="radio" id="no" name="dost" value="no">
    <label for="no"><b> NIE* </b></label>

<p>Wyrażam zgodę na przetwarzanie moich danych osobowych do celów związanych z egzaminem potwierdzającym kwalifikacje w zawodzie.</p>
<p class="sml">*właściwe zaznaczyć</p><br>
<p>Do deklaracji dołączam:</p>
<input type="checkbox" id="doc1" name="attachments" value="doc1">
  <label for="doc1"> Świadectwo ukończenia szkoły*</label><br>
  <input type="checkbox" id="doc2" name="attachments" value="doc2">
  <label for="doc2"> Orzeczenie/opinię publicznej poradni psychologiczno-pedagogicznej (w przypadku występowania dysfunkcji)*</label><br>
  <input type="checkbox" id="doc3" name="attachments" value="doc3">
  <label for="doc3"> Zaświadczenie o stanie zdrowia wydane przez lekarza* (w przypadku choroby lub niesprawności czasowej)*</label><br>
  <p class="sml">*właściwe zaznaczyć</p>
<hr>
<p>Potwierdzam przyjęcie deklaracji</p>
<input type="submit" value="Wyślij">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$a = rand(1, 49);
$b = rand(1, 49);
echo "<p>Twoje liczby to: " . $a . ", " . $b . ", " . $c . ", " . $d . ", " . $e . ", " . $f . ".</p>";
}
?>
<!-- walidacja a następnie zapisywanie danych do pliku dane.txt ze zmienioną linią -->

<p class="sml">Obowiązek informacyjny wynikający z art. 13 i 14 Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE, w zakresie przeprowadzania egzaminu potwierdzającego kwalifikacje zawodowe, zgodnie z przepisami ustawy o systemie oświaty oraz aktami wykonawczymi wydanymi na jej podstawie, został spełniony poprzez zamieszczenie klauzuli informacyjnej na stronie internetowej właściwej okręgowej komisji egzaminacyjnej.</p>





            </form>
        </section>
        <footer>

        </footer>
    </body>
</html>