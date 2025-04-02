@extends('home.layout.app')
@section('title', 'Parceiro')

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
                                    style="color: #FFF; width: 60px">
                                    01
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '02']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    02
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '03']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    03
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '04']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    04
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '05']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    05
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '06']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    06
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '07']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    07
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '08']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    08
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '09']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    09
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '10']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    10
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '11']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    11
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '12']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    12
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '13']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    13
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '14']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    14
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '15']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    15
                                </a>
                                {{-- <a href="{{ route('home.pages.parceiro.show', ['id' => '16']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    16
                                </a> --}}


                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '17']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    17
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '18']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    18
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '19']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    19
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '20']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    20
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '21']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    21
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '22']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    22
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '23']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    23
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '24']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    24
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '25']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    25
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '26']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    26
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '27']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    27
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '28']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    28
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '29']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    29
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '30']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    30
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '31']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    31
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '32']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    32
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '33']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    33
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '34']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    34
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '35']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    35
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '36']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    36
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '37']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    37
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '38']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    38
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '39']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    39
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '40']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    40
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '41']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    41
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '42']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    42
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '43']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    43
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '44']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    44
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '45']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    45
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '46']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    46
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '47']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    47
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '48']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    48
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '49']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    49
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '50']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    50
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '51']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    51
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '52']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    52
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '53']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    53
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '54']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    54
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '55']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    55
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '56']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    56
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '57']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    57
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '58']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    58
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '59']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    59
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '60']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    60
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '61']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    61
                                </a>
                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '62']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    62
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '63']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    63
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '64']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    64
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '65']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    65
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '66']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    66
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '67']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    67
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '68']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    68
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '69']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    69
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '70']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    70
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '71']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    71
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '72']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    72
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '73']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    73
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '74']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    74
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '75']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    75
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '76']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    76
                                </a>

                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '77']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    77
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '78']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    78
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '79']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    79
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '80']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    80
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '81']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    81
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '82']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    82
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '83']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    83
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '84']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    84
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '85']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    85
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '86']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    86
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '87']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    87
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '88']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    88
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '89']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    89
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '90']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    90
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '91']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    91
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '92']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    92
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '93']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    93
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '94']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    94
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '95']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    95
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '96']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    96
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '97']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    97
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '98']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    98
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '99']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px">
                                    99
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '100']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    100
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '101']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    101
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '102']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    102
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '103']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    103
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '104']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    104
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '105']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    105
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '106']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    106
                                </a>

                            </li>

                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '107']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    107
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '108']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    108
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '109']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    109
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '110']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    110
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '111']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    111
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '112']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    112
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '113']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    113
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '114']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    114
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '115']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    115
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '116']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    116
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '117']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    117
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '118']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    118
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '119']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    119
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '120']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    120
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '121']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    121
                                </a>
                            </li>
                            <li>

                                <a href="{{ route('home.pages.parceiro.show', ['id' => '122']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    122
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '123']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    123
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '124']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    124
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '124']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    124
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '125']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    125
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '126']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    126
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '127']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    127
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '128']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    128
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '129']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    129
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '130']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    130
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '128']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    131
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '132']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    132
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '133']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    133
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '134']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    134
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '135']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    135
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '136']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    136
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '137']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    137
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '138']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    138
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '139']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    139
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '140']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    140
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '141']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    141
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '142']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    142
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '143']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    143
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '144']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    144
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '145']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    145
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '146']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    146
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '147']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    147
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '148']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    148
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '149']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    149
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '150']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    150
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '151']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    151
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    165
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '151']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    151
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    165
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '166']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    166
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    165
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '151']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    151
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '152']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    152
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '153']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    153
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '154']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    154
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '155']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    155
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '156']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    156
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '157']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    157
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '158']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    158
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '159']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    159
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '160']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    160
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '161']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    161
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '162']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    162
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '163']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    163
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '164']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    164
                                </a>
                                <a href="{{ route('home.pages.parceiro.show', ['id' => '165']) }}" class="btn btn-app"
                                    style="color: #FFF; width: 60px;">
                                    165
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
                                <a href="" class="btn btn-success" style="color: #FFF" title="sadsa">
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
