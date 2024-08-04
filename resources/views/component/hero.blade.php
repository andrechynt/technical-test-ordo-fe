@php
$donations = array(
  (object) [
    "id"=> 01,
    "name"=> "Budi Hartanto",
    "type"=> "Mangrove Maven",
    "tree"=> 350
  ],
  (object) [
    "id" => 02,
    "name" => "Dewi Sartika",
    "type" => "Mangrove Maven",
    "tree" => 330
  ],
  (object) [
    "id" => 03,
    "name" => "Eko Wahyudi",
    "type"=> "Mangrove Maven",
    "tree"=> 200
  ],
  (object) [
    "id"=> 04,
    "name"=> "Rina Kartika",
    "type"=> "Guardian of the Grove",
    "tree"=> 190
  ], 
  (object) [
    "id"=> 05,
    "name"=> "Agus Prasetyo",
    "type"=> "Guardian of the Grove",
    "tree"=> 140
  ],
  (object) [
    "id"=> 06,
    "name"=> "Irfan Setiawan",
    "type"=> "Mangrove Master",
    "tree"=> 80
  ],
);
@endphp

<div class="container" id="hero">
  <section id="hero_1">
    <div class="text">
      <div class="btn btn-outline__secondary">Green Haven Project - Mangrove</div>
      <h1>Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
    </div>
    <div class="card">
      <div class="head">
        <div class="tree">
          <figure>
            <img src="{{{ asset('assets/mangrove.png') }}}" alt="">
          </figure>
          <div class="count">
            <h2>5,690</h2>
            <p>/10,000 Pohon</p>
          </div>
        </div>
        <div class="btn btn__primary">Support Our Mission</div>
      </div>
      <div class="body">
        <input type="range" id="volume" name="volume" min="0" max="10" value="3.8" step="0.1" disabled/>
      </div>
    </div>
    <figure>
      <img src="{{{ asset('assets/image-hero.png') }}}" alt="" srcset="">
    </figure>
  </section>
  <section id="hero_2">
    <h1>Leaderboard</h1>
    <div class="wrapper-button">
      <div class="btn btn-outline__active">Most Donation</div>
      <div class="btn btn-outline__disable">Most Recent</div>
    </div>
    <div class="list-donation">
      @foreach ($donations as $item)
      <div class="item-donation">
        @if ($item->id <= 03)
        <div class="number-donation__01">{{"0" . $item->id}}</div>
        @elseif ($item->id == 04)
        <div class="number-donation__02">{{"0" . $item->id}}</div>
        @else
        <div class="number-donation__03">{{"0" . $item->id}}</div>
        @endif
        <div class="people">
          <figure>
            @if ($item->type == "Mangrove Maven")
            <img src="{{{ asset('assets/planet-earth-1.png') }}}" alt={{ $item->type }}>
            @elseif ($item->type == "Guardian of the Grove")
            <img src="{{{ asset('assets/planet-earth-2.png') }}}" alt={{ $item->type }}>
            @else
            <img src="{{{ asset('assets/planet-earth-2.png') }}}" alt={{ $item->type }}>
            @endif
          </figure>
          <div class="text">
            <p>{{$item->type}}</p>
            <h3>{{$item->name}}</h3>
          </div>
        </div>
        <div class="tree">
          <figure>
            <img src="{{{ asset('assets/mangrove.png') }}}" alt="" srcset="">
          </figure>
          <div class="count">
            <h3>{{$item->tree}}</h3>
            <p>Pohon</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>