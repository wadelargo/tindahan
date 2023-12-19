<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp9442297.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #0c0c0c;
    --bs-btn-border-color: #101010;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #121212;
    --bs-btn-hover-border-color: #171818;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0b0b0c;
    --bs-btn-active-border-color: #1e1f21;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0e0f10;
    --bs-btn-disabled-border-color: #080808;
}

        .sidebar {
            /* Your existing styles for the sidebar */
        }

        .container {
            /* Your existing styles for the content container */
            background-color: rgba(255, 255, 255, 0); /* Add a semi-transparent white background for better readability */
            padding: 20px;
            border-radius: 10px;
        }
        .table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color)));
    background-color: #ffffff4d;
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg)));
}.table {
    --bs-table-color-type: initial;
    --bs-table-bg-type: initial;
    --bs-table-color-state: initial;
    --bs-table-bg-state: initial;
    --bs-table-color: var(--bs-emphasis-color);
    --bs-table-bg: #ffffff36;
    --bs-table-border-color: #000000;
    --bs-table-accent-bg: #0000008c;
    --bs-table-striped-color: var(--bs-emphasis-color);
    --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
    --bs-table-active-color: var(--bs-emphasis-color);
    --bs-table-active-bg: rgba(var(--bs-emphasis-color-rgb), 0.1);
    --bs-table-hover-color: var(--bs-emphasis-color);
    --bs-table-hover-bg: rgba(var(--bs-emphasis-color-rgb), 0.075);
    width: 100%;
    margin-bottom: 1rem;
    vertical-align: top;
    border-color: var(--bs-table-border-color);
}

        .nav-container {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            width: 300px;
            margin: 20px;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .nav-link {
            text-decoration: none;
            color: #ffffff;

        }

        .nav-link.active {
            font-weight: bold;
        }
    </style>

</head>
<body>
    <div class="sidebar">
        <nav>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('salers') ? 'active' : '' }}" href="{{ url('/salers') }}">Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('products') ? 'active' : '' }}" href="{{ url('/products') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('sales') ? 'active' : '' }}" href="{{ url('/sales') }}">Sale</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
