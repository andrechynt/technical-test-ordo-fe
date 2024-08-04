@php
$personalPackages = array(
  (object) [
    "tier" => "Seedling Scout",
    "seeds" => 5,
    "minBuy" => "75",
    "benefit" => array("Badge"),
    "donors" => "4,900",
    "image" => "assets/icon/tier/seedling-scout.png"
  ],
  (object) [
      "tier" => "Sapling Savior",
      "seeds" => 10,
      "minBuy" => "150",
      "benefit" => array("Badge", "Pin"),
      "donors" => "4,300",
      "image" => "assets/icon/tier/sapling-savior.png"
  ],
  (object) [
    "tier" => "Tree Titan",
    "seeds" => 20,
    "minBuy" => "300",
    "benefit" => array("Badge", "Pin"),
    "donors" => "15,000",
    "image" => "assets/icon/tier/tree-titan.png"
  ],
  (object) [
    "tier" => "Mangrove Master",
    "seeds" => 50,
    "minBuy" => "750",
    "benefit" => array("Badge", "Pin", "Bag"),
    "donors" => "5,000",
    "image" => "assets/icon/tier/mangrove-master.png"
  ],
  (object) [
    "tier" => "Guardian Of The Grove",
    "seeds" => 100,
    "minBuy" => "1,500",
    "benefit" => array("Badge", "Pin", "Bag"),
    "donors" => "300",
    "image" => "assets/icon/tier/guardian-grove.png"
  ],
  (object) [
    "tier" => "Mangrove Maven",
    "seeds" => 200,
    "minBuy" => "3,000",
    "benefit" => array("Badge", "Pin", "Bag"),
    "donors" => "10",
    "image" => "assets/icon/tier/mangrove-maven.png"
  ]
);
    
@endphp

<section id="sponsorship">
  <div class="container">
    <div class="title">
      <h1>Sponsorship Packages</h1>
      <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>
    </div>
    <div class="personal">
      <h2>Personal Sponsorship Package</h2>
      <div class="table-container">
        <table>
          <tr>
            <th class="left">Merbership Tier</th>
            <th>Min. Seeds</th>
            <th>Min. Buy</th>
            <th>Benefits</th>
            <th>Donors</th>
            <th>Action</th>
          </tr>
          @foreach ($personalPackages as $item)
          <tr>
            <td>
              <div class="inline">
                <figure>
                  <img src="{{{ asset($item->image) }}}" alt="">
                </figure>
                <div>{{ $item->tier }}</div>
              </div>
            </td>
            <td class="center">{{ $item->seeds . " Seeds" }}</td>
            <td class="center">{{ "IDR " . $item->minBuy . "K" }}</td>
            <td class="center">
            @foreach($item->benefit as $key => $value)
            @if ($key == count($item->benefit) - 1)
            <span>{{ $value }}</span>
            @else
            <span>{{ $value . " +" }}</span>
            @endif
            @endforeach
            </td>
            <td class="center">{{ $item->donors . " Donors" }}</td>
            <td>
              <div class="btn btn__primary">Support Our Mission</div>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="line"></div>
    <div class="corporate">
      <h2>Corporate Sponsorship Package</h2>
      <div class="table-container">
        <table>
          <tr>
            <th>Benefits</th>
            <th>Eco Trailblazers</th>
            <th>Green Innovators</th>
            <th>Eco Vanguard</th>
          </tr>
          <tr>
            <td>Price</td>
            <td>15 Million IDR</td>
            <td>30 Million IDR</td>
            <td>45 Million IDR</td>
          </tr>
          <tr>
            <td>CO2 Sequestration</td>
            <td>22,5 ton/year</td>
            <td>45 ton/year</td>
            <td>67,5 ton/year</td>
          </tr>
          <tr>
            <td>Number of Tress</td>
            <td>1000 Trees</td>
            <td>2000 Trees</td>
            <td>3000 Trees</td>
          </tr>
          <tr>
            <td>Logo on JCI Banner</td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Logo on Communal Stainless Plate</td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Considered as Main Sponsor</td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Dedicated Stainless Plate</td>
            <td></td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Report Update on Planted Trees</td>
            <td></td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Logo on Event Clothings</td>
            <td></td>
            <td></td>
            <td>
              <figure>
                <img src="{{{ asset('assets/icon/check-list.png') }}}" alt="">
              </figure>
            </td>
          </tr>
          <tr>
            <td>Make a Donation</td>
            <td>
              <div class="btn btn__primary">Support Our Mission</div>
            </td>
            <td>
              <div class="btn btn__primary">Support Our Mission</div>
            </td>
            <td>
              <div class="btn btn__primary">Support Our Mission</div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>