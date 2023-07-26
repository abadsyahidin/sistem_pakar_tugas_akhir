@extends('layouts.main')
@section('title','Home')
@section('content')
<div class="fugu-hero-section">
    <div class="container">

        <head>
            <style>
              table {
                border-collapse: collapse;
                width: 100%;
              }

              th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
              }

              th {
                background-color: #f2f2f2;
              }
            </style>
          </head>
          <body>
            <table>
              <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
              </tr>
              <tr>
                <td>John Doe</td>
                <td>25</td>
                <td>Jakarta</td>
              </tr>
              <tr>
                <td>Jane Smith</td>
                <td>30</td>
                <td>London</td>
              </tr>
              <tr>
                <td>David Lee</td>
                <td>35</td>
                <td>New York</td>
              </tr>
            </table>
          </body>

    </div>
</div>
  <!-- End hero section -->



@endsection
