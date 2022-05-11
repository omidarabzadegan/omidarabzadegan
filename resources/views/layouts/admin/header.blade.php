<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/admin/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Style -->


    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <title>Admin panel</title>
</head>
<style>
    body {
        margin: 0;
        font-family: "Lato", sans-serif;
    }

    .sidebar {
        margin: 0;
        padding: 0;
        width: 15%;
        background-color: #8362fd;
        position: fixed;
        height: 100%;
        overflow: auto;
        border: solid 1px #8362fd;
    }

    .sidebar a {
        display: block;
        color: #fefdfd;
        padding: 16px;
        text-decoration: none;
        border: solid 1px #8362fd;
        border-radius: 8px;
    }

    .sidebar a.active {
        background-color: #fefdfd;
        color: #8362fd;
        border: solid 1px #8362fd;
        border-radius: 8px;
    }

    .sidebar a:hover:not(.active) {
        background-color: #fefdfd;
        color: #8362fd;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }

    .upmenu {
        background: #8362fd;
        position: fixed;
        top: 0;
        left: 15%;
        right: 0;
        height: 60px;
        z-index: 1000;
        color: #fefdfd;
        text-align: right;
        border-radius: 0 0 8px 8px;
    }

    .upmenu a {
        top: -54px;
        left: 15%;
        right: 84px;
        position: fixed;
        margin: 5% auto;
        color: #fefdfd;
    }

    .boxes {
        border: solid 1px #8362fd;
        width: 200PX;
        padding: 30px;
        border-radius: 8px;
    }

</style>
<div class="upmenu">
    <a href="">Hi {{Auth::user()->name;}}</a>
</div>

<body>
