<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request-handler.php" method="POST">
        <input type="text" name="title" placeholder="title"><br>   
        <input type="number" name="year" placeholder="year of release"><br>   
        <select name="genre">
            <option value="comedy">Comedy</option>
            <option value="drama">Drama</option>
            <option value="action">Action</option>
            <option value="fantasy">Fantasy</option>
            <option value="horror">Horror</option>
            <option value="romance">Romance</option>
        </select><br>   
        <label for="released">Is Released?</label>
        <input type="hidden" name="released" value="false">
        <input id="released" type="checkbox" name="released" value="true"><br>   
        <textarea name="plot" placeholder="plot" cols="30" rows="10"></textarea><br>   
        <input type="number" name="rating" placeholder="rating"><br>   
        <button type="Submit">Submit</button><br>   
    </form>
</body>
</html>