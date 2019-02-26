<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
            <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{asset('img/logo1.png')}}" style="width:100px; height: 100px">
                            </td>
                            
                            <td>
                                Invoice #:{{$num}}<br>
                                Created: {{ now()->format('d/m/Y') }}<br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                           
                            <td>
                                
                                {{$user->nom}} {{$user->prenom}}<br>
                                {{$user->email}} <br>
                                {{$user->num_tel}}
                            </td>
                             <td>
                                {{$user->region}} {{$user->ville}}<br>
                                {{$user->adresse}}<br>
                                {{$user->code_postal}}
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                 <td>
                    {{$payment}}
                 </td>
            </tr>
             <tr class="item">
             <td>
                    {{$payment}}
             </td>
         </tr>
            
            
            
            <tr class="heading">
                <td>
                    Produit
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            <?php  $prixtot=null; ?>
            @if(count($commandes)>0)

            @foreach($commandes as $com)
            <?php 
              $prix= $com->produit->prix * $com->quantite;
              $prixtot+=$prix; 
            ?> 
            <tr class="item">
                <td>
                   {{$com->quantite}} x {{$com->produit->marque}}
                </td>
                
                <td>
                    {{$prix}} TND
                </td>
            </tr>
             @endforeach
             @else
                   <tr></tr>
             @endif
            
            
            <tr class="total">
                <td></td>
                
                <td>
                   {{$prixtot}} TND
                </td>
            </tr>
        </table>
         <a href="{{url('/commandes/checkout/invoice_pdf')}}"><button   class="primary-btn order-submit" style="width: 100px;height: 50px;margin-top:7px">PDF</button></a>
    </div>
</body>
</html>