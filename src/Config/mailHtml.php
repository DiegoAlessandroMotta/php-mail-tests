<?php
class HtmlMail
{
  public  function  contact($data)
  {
    $mensaje = '
        <html>
        <body>
          <div style="max-width:800px; margin:auto; background-color:#FFF; border:1px solid #ccc; box-shadow:1px 1px 1px #ccc; border-radius: 6px; padding:10px">
          <div style="text-align:center; background-color:#fff">
        <img src="" style="width:200px; height:auto;margin:auto;">
        
        </div>
          <h1 style="color:#07611f; text-align: center; font-size:1em;">Coca life Adventure</h1>
          <table  style="    width: 100%;
          border: none;
          padding: 1px;">
          <tr><td style="font-size: 1.1em;
          text-align: center;
          text-transform: uppercase;
          font-weight: 700;
          padding: 10px;
          letter-spacing: 0.3em;
          background: #07611f;
          color: white;
          border: navajowhite;
          border-radius: 5px 5px 0px 0px;" colspan="2">Datos del Contacto</td></tr>
          <tr>
            <td><strong>Name:</strong></td>
            <td>' . $data['Name'] . '</td>
          </tr>
          <tr>
            <td><strong>Country:</strong></td>
            <td>' . $data['pais'] . '</td>
        </tr>
          <tr>
            <td><strong>Phone:</strong></td>
            <td>' . $data['phone'] . '</td>
        </tr>
          <tr>
              <td><strong>Email:</strong></td>
              <td>' . $data['email'] . '</td>
          </tr>
          <tr>
              <td><strong>Menssaje:</strong></td>
              <td>' . $data['messaje'] . '</td>
          </tr>            
            </table>  
        </div> 
        </body>
        </html>
        ';
    return $mensaje;
  }
  public function booking($data, $pasajeros, $payme = null)
  {
    $i = 1;
    $totalPasajeros = "";
    foreach ($pasajeros as $key => $value) {
      $totalPasajeros .= "
              <tr><td colspan='2'><b>DATOS DEL PASAJERO $i</b></td></tr>
              <tr><td>Nombre:</td><td>" . $value['name'] . "</td></tr>
              <tr><td>Apellidos:</td><td>" . $value['firstName'] . "</td></tr>
              <tr><td>Pasaporte:</td><td>" . $value['docttype'] . "-" . $value['docnumber'] . "</td></tr>
              <tr><td>Age:</td><td>" . $value['age'] . "</td></tr>
              <tr><td>city:</td><td>" . $value['city'] . "</td></tr>
              <tr><td>Genero:</td><td>" . $value['gender'] . "</td></tr>
              <tr><td>Meals option:</td><td>" . $value['typealimento'] . "</td></tr    
            ";
      $i++;
    }
    $template = '  
        <html>
        <meta charset="UTF-8">

        <body style="background-color:#F0F0F0">
            <div
                style="max-width:1000px; margin:auto; background-color:#FFF; border:1px solid #ccc; box-shadow:1px 1px 1px #ccc; border-radius: 6px; padding:10px">
                <div style="text-align:center; background-color:#fff"><img
                        src=""
                        style="width:200px; height:auto;margin:auto;"></div>
                <h1
                    style="text-align: center; font-size: 1.2em;  margin: 0px; background: #379333; color: white; padding: 6px; margin-top: 5px;border-radius: 5px;">
                    Reservation - Coca life Adventure </h1>
                <div style="text-align: center;">
                    <span style="display: inline-block;
                  background: #067302;
                  color: white;
                  font-size: 13px;
                  padding: 5px;
                  margin-bottom: 10px;">Enviado el:' . Date('Y/m/d') . '</span>
                </div>
                <table class="vv-table" style="width:100%" border>
                    <tr>
                        <td style=" font-size: 1em;
                  text-align: center;
                  text-transform: uppercase;
                  font-weight: 700;
                  padding: 3px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  letter-spacing: 0.3em;" colspan="2">Contact information</td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>' . $data['name'] . '</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>' . $data['email'] . '</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>' . $data['phone'] . '</td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td>' . $data['country'] . '</td>
                    </tr>
                    <tr>
                  <td style=" font-size: 1em;
                  text-align: center;
                  text-transform: uppercase;
                  font-weight: 700;
                  padding: 3px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  letter-spacing: 0.3em;" colspan="2"> Details Tour</td>
                    </tr>
                    <tr>
                        <td>Tour:</td>
                        <td>' . $data['tour'] . '</td>
                    </tr>
                    <tr>
                        <td>Travel Date Start:</td>
                        <td>' . $data['startDate'] . '</td>
                    </tr>
                    <tr>
                      <td>Travel Date Alternative:</td>
                      <td>' . $data['alteredDate'] . '</td>
                  </tr>
                    <tr>
                      <td>Type Tour:</td>
                      <td>' . $data['type'] . '</td>
                  </tr>
                  <tr>
                    <td>Would you like to add extra day tours:</td>
                    <td>' . $data['extra'] . '</td>
                </tr>
                <tr>
                   <td>Routes Extras:</td>
                    <td>' . $data['extraroute'] . '</td>
                </tr>
                <tr>
                  <td>Vistadome Train:</td>
                  <td>' . $data['extratrain'] . '</td>
              </tr>
                  <tr>
                    <td>payment deposited:</td>
                    <td> <strong>' . $data['paymet'] . ':00 USD</strong></td>
                </tr>
                <tr>
                  <td>rental:</td>
                  <td> <strong>' ./* $data['rental'] */ "rentaln't" . '</strong></td>
              </tr>
                <tr>
                  <td>additional message:</td>
                  <td>' . $data['message'] . '</td>
              </tr>
                 <td style=" font-size: 1em;
                  text-align: center;
                  text-transform: uppercase;
                  font-weight: 700;
                  padding: 3px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  letter-spacing: 0.3em;" colspan="2">travelers list</td>
                    </tr>
                    ' . $totalPasajeros . '
                </table>
               
                <div style="border-top: 1px solid #ff4951;

              margin-top: 41px;">
                  <div>
                  <small>EL Pasajero Acepto Terminos y Condiciones</small>
               </div>
                    <p> Sent from reservation form Coca life Adventure(<a
                            href="https://www.cocalifeadventure.com">https://www.cocalifeadventure.com/</a>)
                    </p>
                </div>
            </div>
        </body>
        <style>
        table {
          border-collapse: collapse;
        }
         table tbody tr{
           border-bottom:1px solid #cacaca;
         }
         table tbody tr td{
           padding: 5px;
         }
        </style>
        </html>
        ';
    return $template;
  }
  //  template  envia a  passajero auto matic
  public function templatepass($data)
  {
    $mensaje = '
        <html>
        <body>
            <div
                style="max-width:800px; margin:auto; background-color:#FFF; border:1px solid #ccc; box-shadow:1px 1px 1px #ccc; border-radius: 6px; padding:10px">
                <div style="text-align:center; background-color:#fff">
                </div>
                <table style="width: 100%; border: none;  padding: 1px;">
                    <tr>
                        <td style="font-size: 1.1em;
                  text-align: center;
                  text-transform: uppercase;
                  font-weight: 700;
                  padding: 10px;
                  letter-spacing: 0.3em;
                  border: navajowhite;
                  border-radius: 5px 5px 0px 0px;" colspan="2">thank you for booking with "Coca Life Adventure"</td>
                    </tr>
                    <tr>
                        <td><strong>Tours:</strong></td>
                        <td>' . $data['tour'] . '</td>
                    </tr>
                    <tr>
                        <td><strong>Date:</strong></td>
                        <td>' . $data['date'] . '</td>
                    </tr>
                </table>
                <hr>
                <div>
                    <table
                        style="width:100%; height: 213px; padding-top:33px; padding-right:0; padding-bottom:38px; padding-left:10px; font-size: 12px">
                        <tbody>
                            <tr>
                                <td style="width:500px; padding:0;text-align: center;">
                                    <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/user5.png"
                                        alt="Coca life Adventure" style="    width: 118px;
                                        padding-right: 20px;
                                        opacity: 1;
                                        filter: grayscale(1);">
                                    <br>
                                    <br>
                                    <div style="text-align: center;">
                                        <a href="https://www.facebook.com/MachuPicchuViajesPeruTour">
                                            <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/faceboosss.png"
                                                width=16px alt="facebook">
                                        </a>
                                        <a href="https://www.youtube.com/channel/UCJ7wD5-lsTqtAJi936DC7xg">
                                            <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/youtube.png"
                                                width=16px alt="youtube">
                                        </a>
                                        <a href="https://www.youtube.com/channel/UCJ7wD5-lsTqtAJi936DC7xg">
                                            <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/Twitter_icon_icon-icons.com_69154.png"
                                                width=16px alt="twitters">
                                        </a>
                                    </div>
                                </td>
                                <td style="border-left: 2px solid #f1451e; width:22px; height:136px; padding: 0px; opacity:0.8">
                                </td>
                                <td style="padding:3px">
                                    <b style="text-decoration: underline;"><strong>Reservation and Sales:</strong>  Freddy Huaman </b>
                                    <br>
                                    <b style=""><strong>Address:</strong> Av. El Sol #900 Office 105 Primer Pis, Cusco -Perú </b>
                                    <a href="tel:+51 995050803"
                                        style="text-decoration:none; color:black;display: flex;padding: 3px;">
                                        <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/telephone.png"
                                            height=15px style="margin-right:5px;">+51 995050803
                                    </a>
                                    <a href="https://www.machupicchuviajesperu.com/"
                                        style="text-decoration:none; color:black;display: flex;padding: 3px;">
                                        <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/link.png"
                                            width="15px" style="margin-right:5px;"> https://www.machupicchuviajesperu.com/</a>
                                    <a href="mailto:machupicchuviajesperu@gmail.com"
                                        style="text-decoration:none; color:black;display: flex;padding: 3px;">
                                        <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/mail.png"
                                            width="15px" style="margin-right:5px;">machupicchuviajesperu@gmail.com</a>
                                     <a href="mailto:machupicchuviajesperu@hotmail.com"
                                            style="text-decoration:none; color:black;display: flex;padding: 3px;">
                                            <img src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/mail.png"
                                                width="15px" style="margin-right:5px;">machupicchuviajesperu@hotmail.com</a>
                                    <br>
                                    <a href="https://www.machupicchuviajesperu.com/"><img
                                            src="https://www.machupicchuviajesperu.com/wp-content/uploads/2021/09/cropped-logomapi-2.png"
                                            alt="Coca life Adventure" style="width:190px;"></a>
                                    <span style="    display: block;
                                        padding: 5px;
                                        text-align: center;
                                        color: #ff5b00;
                                        font-weight: 700;">TOUR OPERATOR</span>
                                        h
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
        </html>
        ';
    return $mensaje;
  }
  public function contacTours($data)
  {
    $mensaje = '
        <html>
        <body>
          <div style="max-width:800px; margin:auto; background-color:#FFF; border:1px solid #ccc; box-shadow:1px 1px 1px #ccc; border-radius: 6px; padding:10px">
          <div style="text-align:center; background-color:#fff">
        <img src="" style="width:200px; height:auto;margin:auto;">
        
        </div>
          <h1 style="color:#07611f; text-align: center; font-size:1em;">Coca life Adventure</h1>
          <table  style="    width: 100%;
          border: none;
          padding: 1px;">
          <tr><td style="font-size: 1.1em;
          text-align: center;
          text-transform: uppercase;
          font-weight: 700;
          padding: 10px;
          letter-spacing: 0.3em;
          background: #07611f;
          color: white;
          border: navajowhite;
          border-radius: 5px 5px 0px 0px;" colspan="2">Datos del Contacto</td></tr>
          <tr>
            <td><strong>Tours:</strong></td>
            <td>' . $data['tours'] . '</td>
          </tr>
          <tr>
            <td><strong>Name:</strong></td>
            <td>' . $data['Name'] . '</td>
          </tr>
          <tr>
            <td><strong>Country:</strong></td>
            <td>' . $data['pais'] . '</td>
        </tr>
          <tr>
              <td><strong>Email:</strong></td>
              <td>' . $data['email'] . '</td>
          </tr>
          <tr>
              <td><strong>Menssaje:</strong></td>
              <td>' . $data['messaje'] . '</td>
          </tr>            
            </table> 
            <div style="border-top: 1px solid #ff4951;
            margin-top: 41px;">
                  <p>Sent from contact form Coca Life Adventure(<a
                          href="#">https://www.califeadventure.com/</a>)
                  </p>
              </div> 
        </div> 
        </body>
        </html>
        ';
    return $mensaje;
  }
}
