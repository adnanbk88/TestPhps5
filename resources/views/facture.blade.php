<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
table {
  width: 100%;
  border-collapse: collapse;
  border: none;
}
td {
    border: 1px solid black;
    text-align: center;
}
   </style>
   </head>
   
   <body>
       
         <div class="container">
         <nav>

           DATE : <a style="text-decoration: none" href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black"></b> </a> {{$commande->created_at}}  </nav>
           <nav>

              NOM : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">      <b style="color: black !important"></b> </a>{{$commande->nomclient}} {{$commande->prenomclient}} 
           </nav>
           <nav>

              NUMERO : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black"> </b>  </a> +212 {{$commande->telephoneclient}}  
           </nav>
           <nav>

              EMAIL : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black"></b> </a> {{$commande->emailclient}}
           </nav>
        
         
<center>
            
               <img src="img/ANM.png" width=300px">
         </center>

      <center>
 
       
         
     <hr style="color: pink">
         <p>VOTRE FACTURE : </p>
        </center>
        
         <div class="container py-5 my-5">
            <div class="row">
               <div class="col-mg-6">
                  <table  border="1" style="margin: auto; width:100%">
                     <tr>   
                      <th> NOM PRODUIT</th>
                        
                        <th> ETAT </th>
                        <th> TAILLE </th>
                        <th> PRIX </th>
                     </tr>
                     
                     <tr>
                        <td>
                            {{$commande->produit->Model}}
                        </td>
                        <td>
                            {{$commande->produit->Etat}} 
                        </td>
                        <td>
                            {{$commande->produit->Taille}} G.O
                        </td>
                        <td>
                            {{$commande->produit->Prix}} MAD
                        </td>
                     </tr>
                
                   
                  </table>
               </div>
               
            </div><hr style="margin: 50px;color:pink">
               <center>
                   <p style="border: 2px black solid"  style="margin: 50px">MERCI POUR VOTRE CONFIANCE </p>
                  </center>
         </div>
         <center>
          <footer>
            <div class="container">
               <p>ANM &copy; 2021 | All Rights Reserved</p>
            </div>
         </footer>  
         </center>




         
         
   </body>
</html>
