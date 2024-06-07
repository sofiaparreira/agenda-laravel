<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Project Planner</title>
</head>

<body>
    <header>
        <h1>Planner Project</h1>
        <nav class="flex navbar">
            <ul>
                <li class="item-select__nav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                        viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    To Do
                </li>
                <li class="item__nav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                        viewBox="0 0 512 512">
                        <path
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    Doing
                </li>
                <li class="item__nav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                        viewBox="0 0 512 512">
                        <path 
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    Done
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>