@extends('home.layout.app')
@section('title', 'Parceiros')

@section('content')
    <section id="content-section">
        <div class="container">
            <div class="posts-block articles-box">
                <div class="title-section">
                    <h1>
                        Seja parceiro da destaque notícias
                    </h1>
                    <h3><strong>Escolha um número e concorra a 10 cestas básica todos os meses!</strong></h3>

                </div>
                <form action="" method="post">
                    <div class="news-post article-post" style="background-color: #1866CF; padding: 70px; color: #FFF">
                        <ul class="pagination-list">
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '01']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    01
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '02']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    02
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '03']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    03
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '04']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    04
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '05']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    05
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '06']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    06
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '07']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    07
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '08']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    08
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '09']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    09
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '10']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    10
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '11']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    11
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '12']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    12
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '13']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    13
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '14']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    14
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '15']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    15
                                </a>
                                {{-- <a href="{{ route('home.pages.parceiro.show', ['id' => '16']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    16
                                </a> --}}


                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '17']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    17
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '18']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    18
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '19']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    19
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '20']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    20
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '21']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    21
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '22']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    22
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '23']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    23
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '24']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    24
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '25']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    25
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '26']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    26
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '27']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    27
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '28']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    28
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '29']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    29
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '30']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    30
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '31']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    31
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '32']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    32
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '33']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    33
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '34']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    34
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '35']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    35
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '36']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    36
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '37']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    37
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '38']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    38
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '39']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    39
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '40']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    40
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '41']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    41
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '42']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    42
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '43']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    43
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '44']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    44
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '45']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    45
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '46']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    46
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '47']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    47
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '48']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    48
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '49']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    49
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '50']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    50
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '51']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    51
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '52']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    52
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '53']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    53
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '54']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    54
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '55']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    55
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '56']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    56
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '57']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    57
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '58']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    58
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '59']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    59
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '60']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    60
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '61']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    61
                                </a>
                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '62']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    62
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '63']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    63
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '64']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    64
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '65']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    65
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '66']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    66
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '67']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    67
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '68']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    68
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '69']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    69
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '70']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    70
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '71']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    71
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '72']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    72
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '73']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    73
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '74']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    74
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '75']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    75
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '76']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    76
                                </a>

                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '77']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    77
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '78']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    78
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '79']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    79
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '80']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    80
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '81']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    81
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '82']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    82
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '83']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    83
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '84']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    84
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '85']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    85
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '86']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    86
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '87']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    87
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '88']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    88
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '89']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    89
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '90']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    90
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '91']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    91
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '92']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    92
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '93']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    93
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '94']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    94
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '95']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    95
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '96']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    96
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '97']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    97
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '98']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    98
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '99']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;">
                                    99
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '100']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    100
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '101']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    101
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '102']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    102
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '103']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    103
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '104']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    104
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '105']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    105
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '106']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    106
                                </a>

                            </li>

                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '107']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    107
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '108']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    108
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '109']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    109
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '110']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    110
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '111']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    111
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '112']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    112
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '113']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    113
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '114']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    114
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '115']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    115
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '116']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    116
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '117']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    117
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '118']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    118
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '119']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    119
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '120']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    120
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '121']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    121
                                </a>
                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '122']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    122
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '123']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    123
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '124']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    124
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '124']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    124
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '125']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    125
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '126']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    126
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '127']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    127
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '128']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    128
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '129']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    129
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '130']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    130
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '128']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    131
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '132']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    132
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '133']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    133
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '134']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    134
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '135']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    135
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '136']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    136
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '137']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    137
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '138']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    138
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '139']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    139
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '140']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    140
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '141']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    141
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '142']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    142
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '143']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    143
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '144']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    144
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '145']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    145
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '146']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    146
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '147']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    147
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '148']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    148
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '149']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    149
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '150']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    150
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '151']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    151
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    165
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '151']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    151
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    165
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '166']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    166
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '167']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    167
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '168']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    168
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '169']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    169
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '170']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    170
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '171']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    171
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '172']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    172
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '173']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    173
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '174']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    174
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '175']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    175
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    175
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '176']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    176
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '177']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    177
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '178']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    178
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '179']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    179
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '180']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    180
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '181']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    181
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '182']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    182
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '183']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    183
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '184']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    184
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '185']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    185
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '186']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    186
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '187']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    187
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '188']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    188
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '189']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    189
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '190']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    190
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '191']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    191
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '192']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    192
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '193']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    193
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '194']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    194
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '195']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    195
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '196']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    196
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '197']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    197
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '198']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    198
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '199']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    199
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '200']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px; border-radius: 50%;; border-radius: 50%;">
                                    200
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>

                <div class="news-post article-post" style="background-color: #1866CF; padding: 26px; color: #FFF">
                    <ul class="pagination-list">
                        <h3 style="color: #FFF;">Número já escolhidos</h3>
                        @foreach ($parceiro as $item)
                            <li class="">
                                <a href="" class="btn btn-success" style="color: #FFF;  border-radius: 50%;"
                                    title="{{ $item->name }}">
                                    {{ $item->number }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align: justify;">
                            <strong>A Lei nº 14.909, de 1º de julho de 2024</strong>, institui o Dia do Rei Pelé, a ser
                            celebrado anualmente
                            no dia 19 de novembro. A lei foi sancionada pelo presidente Luiz Inácio Lula da Silva.
                            A data escolhida para a homenagem é uma referência a 19 de novembro de 1969, quando Pelé marcou
                            o seu milésimo gol. O feito aconteceu no estádio do Maracanã, no Rio de Janeiro, durante a
                            partida entre o Santos e o Vasco da Gama.
                            O projeto de lei que criou o Dia do Rei Pelé foi o 5.867/2023, dos deputados Luciano Ducci
                            (PSB-PR) e Felipe Carreras (PSB-PE). O projeto foi aprovado pela Câmara dos Deputados e pelo
                            Senado Federal.
                            Pelé, cujo nome verdadeiro era Edson Arantes do Nascimento, foi considerado o maior jogador de
                            futebol de todos os tempos. Ele faleceu em decorrência de um câncer em 29 de dezembro de 2022,
                            em São Paulo, aos 82 anos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
