<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Exam Application Form</title>
    </head>
    <body>
    <section class="cent">
        <h3 id="attach">Attachment 3</h3>
        <h2 class="title">STUDENT / LISTENER / GRADUATE</h2>
        <h2 class="title">DECLARATION OF EXAMINATION APPLICATION</h2><br>

        <form action="examApplicationForm.php" method="POST" novalidate>
            <div class="rght">
                <input type="text" id="cityd" name="cityd" placeholder="City"><br>
                <label class="sml" for="cityd">City, Date</label>
                <input type="text" id="datec" name="datec" placeholder="DD MM YYYY"><br>
                <label class="sml" for="datec">DD MM YYYY</label>
            </div>

            <p><b>Personal Information</b>
                <select id="stutype" name="stutype" class="wide">
                    <option value="student">Student</option>
                    <option value="listener">Listener</option>
                    <option value="graduate">Graduate</option>
                </select>
            (fill in capital letters):</p>

            <label for="lname" class="block">Last Name: </label> 
            <input class="wide" type="text" id="lname" name="lname" placeholder="LAST NAME"><br><br>

            <label for="fname" class="block">First Name(s): </label> 
            <input class="wide" type="text" id="fname" name="fname" placeholder="FIRST NAME / NAMES"><br><br>

            <label for="bplace" class="block">Date and Place of Birth: </label>
            <input class="hwide1" type="text" id="bdate" name="bdate" placeholder="DD MM YYYY">
            <input class="hwide" type="text" id="bplace" name="bplace" placeholder="PLACE OF BIRTH"><br>
            <label for="bdate" class="block1">DD MM YYYY</label><br><br>

            <label for="pesel" class="block">PESEL Number: </label> 
            <input class="wide" type="text" id="pesel" name="pesel" placeholder="PESEL NUMBER"><br>
            <p class="sml">If no PESEL number is available, provide the passport series and number or another identity document.</p>

            <p><b>Correspondence Address</b> (fill in capital letters):</p>
            <label class="block" for="city">City: </label> 
            <input class="wide" type="text" id="city" name="city" placeholder="CITY"><br><br>

            <label class="block" for="strhome">Street and House Number: </label> 
            <input class="wide" type="text" id="strhome" name="strhome" placeholder="STREET AND HOUSE NUMBER"><br><br>

            <label class="block" for="pcode">Postal Code and Post Office: </label> 
            <input class="hwide1" type="text" id="pcode" name="pcode" placeholder="POSTAL CODE">
            <input class="hwide" type="text" id="ppost" name="ppost" placeholder="POST OFFICE"><br><br>

            <label class="block" for="tel"><b>Phone Number with Area Code: </b></label> 
            <input class="hwide2" type="text" id="tel" name="tel" placeholder="PHONE NUMBER">
            <label for="mail"><b>Email: </b></label>
            <input class="hwide3" type="text" id="mail" name="mail" placeholder="EMAIL ADDRESS"><br><br><br>

            <label for="subm"><b>I declare my application to take the vocational qualification exam<br>scheduled for </b></label>
            <input type="text" id="sumb" name="sumb" placeholder="EXAM DATE"><br><br>

            <select id="ozkwal" name="ozkwal" class="wide">
                <option value="INF.02">INF.02</option>
                <option value="INF.03">INF.03</option>
            </select>
            <input class="wide" type="text" id="nkwal" name="nkwal" placeholder="QUALIFICATION NAME"><br>
            <label class="left" for="ozkwal">Qualification code according to the curriculum</label>
            <label class="right" for="nkwal">Qualification name</label><br><br>

            <select id="sczaw" name="ozkwal" class="wide">
                <option value="ELECTRONICS">742117</option>
                <option value="IT">351203</option>
                <option value="MECHATRONICS">742118</option>
            </select>
            <input class="wide" type="text" id="nzaw" name="nzaw" placeholder="OCCUPATION NAME"><br>
            <label class="left" for="sczaw">Digital symbol of the occupation</label>
            <label class="right" for="nzaw">Occupation name</label><br><br>

            <input type="radio" id="first" name="first" value="first">
            <label for="first"><b> First time* / </b></label>
            <input type="radio" id="returning" name="first" value="returning">
            <label for="returning"><b> Retaking* for part </b></label>
            <input type="radio" id="theory" name="returning" value="theory">
            <label for="theory"><b> Written*, </b></label>
            <input type="radio" id="practise" name="returning" value="practise">
            <label for="practise"><b> Practical* </b></label><br>

            <p><b>Adjustments</b></p>
            <input type="radio" id="yes" name="dost" value="yes">
            <label for="yes"><b> YES* / </b></label>
            <input type="radio" id="no" name="dost" value="no">
            <label for="no"><b> NO* </b></label>

            <p>I consent to the processing of my personal data for purposes related to the vocational qualification exam.</p>
            <p class="sml">*mark as appropriate</p><br>

            <p>Attachments included:</p>
            <input type="checkbox" id="doc1" name="attachments" value="CERTIFICATE">
            <label for="doc1"> School completion certificate*</label><br>

            <input type="checkbox" id="doc2" name="attachments" value="ASSESSMENT">
            <label for="doc2"> Psychological-pedagogical opinion (in case of dysfunctions)*</label><br>

            <input type="checkbox" id="doc3" name="attachments" value="MEDICAL">
            <label for="doc3"> Medical certificate (in case of illness or temporary disability)*</label><br>
            <p class="sml">*mark as appropriate</p>
            <hr>

            <input type="checkbox" id="confirm" name="confirm" value="yes" required>
            <label for="confirm"><b> I confirm the accuracy of the data and submission of the declaration *</b></label><br><br>
            <input type="submit" value="Submit">

            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize input
    function sanitize($data) {
        return strtoupper(htmlspecialchars(stripslashes(trim($data))));
    }

    function formatDate($date) {
        if (preg_match("/^\d{2} \d{2} \d{4}$/", $date)) {
            return str_replace(" ", "-", $date);
        }
        return $date;
    }

    // Validate required fields
    $errors = [];

    $cityd = sanitize($_POST["cityd"]);
    $datec = formatDate(sanitize($_POST["datec"]));
    $stutype = sanitize($_POST["stutype"]);
    $lname = sanitize($_POST["lname"]);
    $fname = sanitize($_POST["fname"]);
    $bdate = formatDate(sanitize($_POST["bdate"]));
    $bplace = sanitize($_POST["bplace"]);
    $pesel = sanitize($_POST["pesel"]);
    $city = sanitize($_POST["city"]);
    $strhome = sanitize($_POST["strhome"]);
    $pcode = sanitize($_POST["pcode"]);
    $ppost = sanitize($_POST["ppost"]);
    $tel = sanitize($_POST["tel"]);
    $mail = sanitize($_POST["mail"]);
    $sumb = sanitize($_POST["sumb"]);
    $ozkwal = sanitize($_POST["ozkwal"]);
    $nkwal = sanitize($_POST["nkwal"]);
    $sczaw = sanitize($_POST["ozkwal"]);
    $nzaw = sanitize($_POST["nzaw"]);
    $first = isset($_POST["first"]) ? sanitize($_POST["first"]) : "";
    $returning = isset($_POST["returning"]) ? sanitize($_POST["returning"]) : "";
    $theory = isset($_POST["theory"]) ? sanitize($_POST["theory"]) : "";
    $practise = isset($_POST["practise"]) ? sanitize($_POST["practise"]) : "";
    $dost = isset($_POST["dost"]) ? sanitize($_POST["dost"]) : "";
    $attachments = isset($_POST["attachments"]) ? (array) $_POST["attachments"] : [];

    // Validation checks
    if (empty($lname) || empty($fname) || empty($bdate) || empty($bplace) || empty($pesel) || empty($city) || empty($strhome) || empty($pcode) || empty($ppost) || empty($tel) || empty($mail) || empty($sumb) || empty($nkwal) || empty($nzaw)) {
        $errors[] = "All required fields must be filled.";
    }

    if (!preg_match("/^\d{11}$/", $pesel) && $pesel != "") {
        $errors[] = "Invalid PESEL number. It must contain 11 digits.";
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && $mail != "") {
        $errors[] = "Invalid email address.";
    }

    if (!preg_match("/^\d{2}-\d{3}$/", $pcode) && $pcode != "") {
        $errors[] = "Invalid postal code format (Expected: XX-XXX).";
    }

    if (!preg_match("/^\d{9}$/", $tel) && $tel != "") {
        $errors[] = "Invalid phone number. It should contain 9 digits.";
    }

    if (!preg_match("/^\d{2}-\d{2}-\d{4}$/", $bdate) && !empty($bdate)) {
        $errors[] = "Invalid birth date format (Expected: DD MM YYYY).";
    } else if (!empty($bdate)){
        $bdate_parts = explode("-", $bdate);
        $formatted_bdate = $bdate_parts[2] . "-" . $bdate_parts[1] . "-" . $bdate_parts[0];

        if (!checkdate($bdate_parts[1], $bdate_parts[0], $bdate_parts[2])) {
            $errors[] = "Invalid date. Please check the day and month.";
        } elseif (strtotime($formatted_bdate) >= strtotime(date("Y-m-d"))) {
            $errors[] = "The birth date must be in the past.";
        }
    }

    if (!preg_match("/^\d{2}-\d{2}-\d{4}$/", $datec) && !empty($datec)) {
        $errors[] = "Invalid declaration date format (Expected: DD MM YYYY).";
    }

    // Validate radio buttons
    if (empty($first) && empty($returning)) {
        $errors[] = "You must choose whether you are taking the exam for the first time or retaking it.";
    }

    if ($returning && empty($theory) && empty($practise)) {
        $errors[] = "You must specify whether you are retaking the written or practical part (or both).";
    }

    if (empty($dost)) {
        $errors[] = "You must select an option regarding exam adjustments.";
    }

    if (!isset($_POST["confirm"]) && $errors == []) {
        $errors[] = "You must confirm the accuracy of the data before submitting.";
    }

    if (empty($errors)) {
        // Prepare data for file storage
        $data = "Exam Application Form:\n";
        $data .= "City: $cityd, Date: $datec\n";
        $data .= "Personal Status: $stutype\n";
        $data .= "Last Name: $lname\n";
        $data .= "First Name(s): $fname\n";
        $data .= "Date and Place of Birth: $bdate, $bplace\n";
        $data .= "PESEL: $pesel\n";
        $data .= "Address: $city, $strhome, Postal Code: $pcode, Post Office: $ppost\n";
        $data .= "Phone: $tel, Email: $mail\n";
        $data .= "Exam Date: $sumb\n";
        $data .= "Qualification: $ozkwal ($nkwal)\n";
        $data .= "Occupation: $sczaw ($nzaw)\n";
        $data .= "Exam Attempt: " . ($first ? "FIRST TIME" : "RETAKE") . "\n";
        if ($returning) {
            $data .= "Retaking Part: " . ($theory ? "WRITTEN" : "") . ($practise ? "PRACTICAL" : "") . "\n";
        }
        $data .= "Adjustments: " . ($dost == "yes" ? "YES" : "NO") . "\n";
        $data .= "Attachments: " . implode(", ", $attachments) . "\n";
        $data .= "------------------------------\n";

        // Save to file
        file_put_contents("data.txt", $data, FILE_APPEND);

        echo "<p style='color:green;'>The exam application has been successfully submitted!</p>";
    } else {
        // Display errors
        echo "<p style='color:red;'><b>Form Errors:</b><br>" . implode("<br>", $errors) . "</p>";
    }
}
?>
        </form>
    </section>
        <footer>
            <p class="sml">The information obligation resulting from Articles 13 and 14 of Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC, in the scope of conducting an examination confirming professional qualifications, in accordance with the provisions of the Education System Act and implementing acts issued on its basis, has been fulfilled by posting an information clause on the website of the relevant district examination board.</p>
        </footer>
    </body>
</html>