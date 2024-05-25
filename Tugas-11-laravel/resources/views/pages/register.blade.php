<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form </h4>
    <form action="/welcome" method="POST">
        @csrf
        <label for="fname">First name:</label><br><br>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last name:</label><br><br>
      <input type="text" id="lname" name="lname"><br><br>
      <label for="gender">Gender:</label><br><br>
      <input type="radio" id="man" name="gender" value="man">
      <label for="man">Man</label><br>
      <input type="radio" id="woman" name="gender" value="woman">
      <label for="woman">Women</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br><br>
      <label for="nationality">Nationality:</label><br><br>
      <select id="nationality" name="nationality"><br><br>
        <option value="indonesia" selected>Indonesian</option>
        <option value="singapore">Singapura</option>
        <option value="malaysia">Malaysian</option>
        <option value="thailand">Thailand</option>
    </select><br><br>
      <label for="language">Language Spoken:</label><br><br>
      <input type="checkbox" id="indonesia" name="language" value="indonesia">
      <label for="indonesian">Bahasa Indonesia</label><br>
      <input type="checkbox" id="english" name="language" value="english">
      <label for="english">English</label><br>
      <input type="checkbox" id="arabic" name="language" value="arabic">
      <label for="arabic">Arabic</label><br>
      <input type="checkbox" id="japanase" name="language" value="japanase">
      <label for="japanase">Japanase</label><br><br>
      <label for="bio">Bio:</label><br><br>
      <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br>
      <input type="submit" value="Sign Up">
    </form>
 </body>
</html>