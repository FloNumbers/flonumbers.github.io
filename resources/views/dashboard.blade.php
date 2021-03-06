@extends('layout')

@section('content')
<div class="container_dashboard">
        <div class="Studiemonitor">

            <table border="1" cellspacing="0">

                <tr class="tabletop">
                    <th class="tabletop"></th>
                    <th class="tabletop">COURSE</th>
                    <th class="tabletop">GRADE</th>
                    <th class="tabletop">EC</th>
                    <th class="tabletop">EC behaald</th>
                </tr>
                <tr>
                    <th class="tablemid" rowspan="3">Blok 1</th>
                    <td>Studieloopbaan Ori&eumlntatie</td>
                    <td> - </td>
                    <td> 2,5 </td>
                    <td id="behaald">*</td>
                </tr>
                <tr>
                    <td>Computer Science Basics</td>
                    <td> - </td>
                    <td> 7,5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td>Programming Basics</td>
                    <td> - </td>
                    <td> 5,0 </td>
                    <td id="behaald">x</td>

                </tr>
                <tr class="TotalEC">
                    <th class="TotalEC">Totale EC</th>
                    <td> </td>
                    <td> </td>
                    <td> 15,0 </td>
                    <td id="behaald"></td>
                </tr>
                <tr>
                    <th class="tablemid" rowspan="3">Blok 2</th>
                    <td> Professional Skils 1 </td>
                    <td> - </td>
                    <td> 2.5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> Hz Personality 2a </td>
                    <td> - </td>
                    <td> 2,5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> Object-oriented Programming </td>
                    <td> - </td>
                    <td> 10,0 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr class="TotalEC">
                    <th class="TotalEC">Totale EC</th>
                    <td> </td>
                    <td> </td>
                    <td> 30,0 </td>
                    <td id="behaald"></td>
                </tr>
                <tr>
                    <th class="tablemid" rowspan="4">Blok 3</th>
                    <td> Professional Skills 2 </td>
                    <td> - </td>
                    <td> 2,5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> professionele werkplek </td>
                    <td> - </td>
                    <td> 2.5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> framework development 1 </td>
                    <td> - </td>
                    <td> 5,0 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> framework project 1 </td>
                    <td> - </td>
                    <td> 5,0 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr class="TotalEC">
                    <th class="TotalEC">Totale EC</th>
                    <td> wanneer dit groen is is de</td>
                    <td> NBSA grens behaald</td>
                    <td> 45,0 </td>
                    <td id="behaald"></td>
                </tr>
                <tr>
                    <th class="tablemid" rowspan="4">Blok 4</th>
                    <td> professional Skills 3 </td>
                    <td> - </td>
                    <td> 2.5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> IT Personality 2a </td>
                    <td> - </td>
                    <td> 2,5 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> Framework development 2 </td>
                    <td> - </td>
                    <td> 5,0 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr>
                    <td> Framework project 2 </td>
                    <td> - </td>
                    <td> 5,0 </td>
                    <td id="behaald">x</td>
                </tr>
                <tr class="TotalEC">
                    <th class="TotalEC">Totale EC</th>
                    <td> </td>
                    <td> </td>
                    <td> 60,0 </td>
                    <td id="behaald"></td>
                </tr>
            </table>
        </div>
        <div class="progressbar_container">
            <div class="progressbar">
                <div class="inside_progressbar"></div>
            </div>
        </div>
    </div>
    <h4 class="studiewijzer_titel">Studiewijzer</h4>
    <ul class="studiewijzer">
        <li> <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-2017-18-HZ-met-inhoudsopgave-20170825.pdf"
                target="_blank">Het Onderwijs en Examenregelement (OER) van de HZ</a></li>
        <li> <a href="https://hz.nl/uploads/documents/Regelingen/OERS/PUB-Uitvoeringsregeling-2017%E2%80%932018-HBO-ICT-voltijd-v1.4.pdf"
                target="_blank">De Uitvoeringsregeling (UR) van de opleiding HBO-ICT</a></li>
        <li> <a href="https://learn.hz.nl/my/" target="_blank">De learn omgeving</a></li>
        <li> <a href="https://hz-hbo-ict.slack.com/messages/CCBLXTL05/" target="_blank">De opleidings Slack</a></li>
        <li><a href="https://apps.hz.nl/angular/studievoortgang/studievoortgang" target="_blank">Mijn studievoortgang</a></li>
        <li><a href="https://www.github.com/hz-hbo-ict" target="_blank">opleidingsgithub</a></li>
        <li><a href="https://apps.hz.nl/rooster/Default.aspx?menu=110239084080170187101166073161084015193018067002"
                target="_blank">rooster</a></li>
    </ul>
    <h4 class="progressbar_titel">progressie studiepunten</h4>
    <div class="progress_counter">
        <p>0%</p>
    </div>
@endsection
