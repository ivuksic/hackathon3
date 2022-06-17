<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>

    <h1>Search</h1>

    <form action="http://www.hackathon.localhost/search/result" method="get">

        <input
            type="text"
            name="ownerSearch"
            {{-- value="{{ $search_term }}" --}}
            placeholder="Owner Name:" 
        >

        <input
        type="text"
        name="animalSearch"
        {{-- value="{{ $search_term }}" --}}
        placeholder="Pet Name:" 
        >
       

        <button>Fetch!</button>

       

   </form> 

  

</body>
</html>