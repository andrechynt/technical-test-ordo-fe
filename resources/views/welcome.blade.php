<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Green Haven Project</title>

        @vite(['resources/scss/app.scss'])
    </head>
    <body>
      <div class="backdrop"></div>
      <header>
       <div class="container">
          <img src="{{ asset('assets/logo.png') }}" alt="">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <nav>
            <a href="#">About Green Heaven</a>
            <a href="#">Event Details</a>
            <a href="#">Our Sponsors</a>
            <a href="#">Leaderboard</a>
          </nav>
          <div class="btn btn-outline__primary">Plant a Mangrove</div>
       </div>
      </header>
      <div class="slider-navbar">
        <nav>
          <a href="#">About Green Heaven</a>
          <a href="#">Event Details</a>
          <a href="#">Our Sponsors</a>
          <a href="#">Leaderboard</a>
        </nav>
        <div class="btn btn-outline__primary">Plant a Mangrove</div>
      </div>
      <main>
        @include('component.hero')
        @include('component.partner')
        @include('component.about')
        @include('component.event')
        @include('component.sponsorship')
        @include('component.invit')
      </main>
      <footer>Created By: Mochammad Andre Cahyanto</footer>

      @vite(["resources/js/app.js"])
    </body>
</html>
