<div class="table-container">
<table class="styled-table">
                    <tr>

                    @php
                        $arqustids = array();
                        $arwdgtblnames = array();
                        $aransclmnames = array();
                        $arqstcolnames = array();
                        $arindex = -1;
                    @endphp
                    @foreach($mergedQuestions as $questRec)
                        @php $arindex++; $arqustids[$arindex]=$questRec->id; @endphp
                        @if(isset($questRec->attend_quest_title))
                            @php 
                                $arwdgtblnames[$arindex] = 'answers_attend_quest'; 
                                $aransclmnames[$arindex] = 'answer_attend_quest'; 
                                $arqstcolnames[$arindex] = 'attend_quest_id';
                            @endphp
                            <td  >{{$questRec->attend_quest_title}} </td>
                        @endif
                        @if(isset($questRec->text_question_title))
                            @php 
                                $arwdgtblnames[$arindex] = 'answers_text_question'; 
                                $aransclmnames[$arindex] = 'answer_text_question'; 
                                $arqstcolnames[$arindex] = 'text_question_id';
                            @endphp
                            <td  >{{$questRec->text_question_title}} </td>
                        @endif
                        @if(isset($questRec->optnl_quest_title))
                            @php 
                                $arwdgtblnames[$arindex] = 'answers_optional_question'; 
                                $aransclmnames[$arindex] = 'answer_optnl_quest'; 
                                $arqstcolnames[$arindex] = 'optnl_quest_id';
                            @endphp
                            <td  >{{$questRec->optnl_quest_title}} </td>
                        @endif
                        @if(isset($questRec->memorial_title))
                            @php 
                                $arwdgtblnames[$arindex] = 'answers_memorial'; 
                                $aransclmnames[$arindex] = 'answer_memorial'; 
                                $arqstcolnames[$arindex] = 'memorial_id';
                            @endphp
                            <td  >{{$questRec->memorial_title}} </td>
                        @endif
                    @endforeach
                    </tr>
                  
                     @php
                        display_answers($cardId,$arindex,$arqustids, $arwdgtblnames, $arqstcolnames, $aransclmnames );
                    @endphp 
                   
                </table>
       </div>


<style>
    .table-container {
        width: 100%;
        overflow-x: auto; /* Enables horizontal scrolling */
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width: 100%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
           
        


