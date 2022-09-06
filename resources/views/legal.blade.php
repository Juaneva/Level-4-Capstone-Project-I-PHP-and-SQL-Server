<?php
function pageName($ss)
{
    if ($ss === 'tos')
        return 'Terms of Service';
    else
        return 'Privacy Policy';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>{{pageName($subsection)}}</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <!-- Button to home page -->
    <button><a href="{{ url('/') }}">Return Home</a></button>

    <div class="pageContent">
        <h1>Legal: {{pageName($subsection)}}</h1>

        @if($subsection==='tos')
        <h2>TERMS AND CONDITIONS / SERVICE</h2>

        <p> Terms of service (ToS) is a type of document stating details about what a service provider is 
            responsible for. </p>
            <br><br>
            <p>
                Terms of service (also known as terms of use and terms and conditions, commonly abbreviated 
                as TOS or ToS, ToU or T&C) are the legal agreements between a service provider and a person 
                who wants to use that service. 
                <br> The person must agree to abide by the terms of service in order 
                to use the offered service. 
                <br>Terms of service can also be merely a disclaimer, especially 
                regarding the use of websites. 
                <br> language and lengthy sentences used in the terms of use 
                have brought concerns on customer privacy and raised public awareness in many ways.
            </p>

        <!-- Source: https://en.wikipedia.org/wiki/Terms_of_service -->

        @else

        <h2> PRIVACY POLICY </h2>
        <p> A privacy policy is a document that explains how an organization handles any customer, 
            client or employee information gathered in its operations.<br>

            Most websites make their privacy policies available to site visitors.  A privacy page should specify any 
            Personally identifiable information that is gathered, such as name, address and credit card number, as well 
            as other things like order history, browsing habits, uploads and downloads.  
            <br> The policy should also explain 
            if data may be left on a user’s computer, such as cookies. 
            <br> According to best practices, the policy should 
            disclose if data may be shared with or sold to third parties and if so, what the purpose is.
            <br><br>
            There is no concensus as to whether or not privacy policies are legally binding and no consistency 
            in enforcement.  In the United States, the Federal Trade Commission (FTC) promotes enforcement of 
            existing laws and industry self-regulation.  Generally for the FTC, data breaches are not sufficient 
            for legal action if there is no loss of money associated with the breach.  
            <br><br>
            The European Union’s Data Protection Directive has confronted companies such as Google about privacy 
            changes that went contrary to E.U. law, threatening sanctions on the massive company.
            <br><br>
            Often, the first statement found in an online privacy policy is one to the effect that, 
            by visiting the web page (which you are doing if you’re reading the policy), you agree to 
            the details of the site’s privacy policy.<br><br>
        <!-- Source: https://www.techtarget.com/whatis/definition/privacy-policy -->
        @endif

    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
</body>

<footer>
    <center> Copyright (c) 2022 Laravel LLC </center>
</footer>

</html>