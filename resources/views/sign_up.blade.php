<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/welcome">
              @csrf
              <label for="firstn1">First Name:</label><br>
              <input type="text" name="firstn"><br>
              <label for="lastn1">Last Name:</label><br>
              <input type="text" name="lastn"><br><br>
       
              <label for="gender">Gender:</label><br>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label><br>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label><br>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Other</label><br><br>
       
              <label for="nation">Nationality:</label><br>
                     <select type="dropdown">
                            <option value="America">America</option>
                            <option value="Arabian">Arabian</option>
                            <option value="Brtish">British</option>
                            <option value="Indonesian" selected>Indonesian</option>
                     </select><br><br>

       
              Language : <br/>
              <input type="checkbox" name="Bahasa Indonesia" value="on">Bahasa Indonesia<br>
              <input type="checkbox" name="English" value="on">English<br>
              <input type="checkbox" name="Other" value="on">Other<br><br>

              Bio: <br/>
              <textarea row="20" cols="15" name="bio">
                            </textarea><br>
       
              <button type="submit" name="Sign Up" value="Sign Up">Sign Up</button>
       
    </form>
</body>
</html>