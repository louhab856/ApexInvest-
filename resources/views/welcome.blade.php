<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ApexInvest</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to ApexInvest</h1>
            <p>A High Yield Investment Program (HYIP) platform</p>
        </header>

        <main>
            <section>
                <h2>Project Description</h2>
                <p>ApexInvest offers high returns on investments with a secure and reliable platform. It includes a referral system and various investment packages (VIP1, VIP2, VIP3) to cater to different investor needs.</p>
            </section>

            <section>
                <h2>Key Features</h2>
                <ul>
                    <li>User Authentication and Management</li>
                    <li>Multiple Investment Packages</li>
                    <li>Referral System</li>
                </ul>
            </section>

            <section>
                <h2>Get Started</h2>
                <p>Sign up now to start investing!</p>
            </section>
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} ApexInvest. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
<style>
    /* Reset default styles */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* Global styles */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f7f7f7;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #333;
}

header p {
    font-size: 1.2rem;
    color: #666;
}

main {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section {
    margin-bottom: 30px;
}

section h2 {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #333;
}

section p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
    margin-bottom: 10px;
}

a {
    text-decoration: none;
    color: #007bff;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 10px;
    margin-bottom: 10px;
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    border: 2px solid #007bff;
    border-radius: 4px;
    color: #fff;
    background-color: #007bff;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

footer {
    text-align: center;
    margin-top: 20px;
    padding-top: 10px;
    border-top: 1px solid #ccc;
    color: #666;
}

</style>