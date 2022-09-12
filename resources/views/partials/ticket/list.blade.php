<div class="col-lg-12">
            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>{{__('Ticket Information')}}</h4>
                </div>
                <!-- title frame end -->
            </div>
                <!-- section title end -->

            <!-- contact form frame -->
            <!-- <div class="art-a art-card" style="font-size: medium;">
            <table cellpadding="0" cellspacing="0" class="tbl-accordion">
                <thead>
                    <tr>
                    <th>{{__('latest update')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Subject Of Ticket')}}</th>
                    <th>{{__('Department')}}</th>
                    <th>{{__('ID')}}</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <td colspan="4">
                        <table cellpadding="0" cellspacing="0" class="tbl-accordion-nested">
                        <thead>
                            <tr>
                                <td class="tbl-accordion">{{__("$ticket->created_at")}}</td>
                                <td class="tbl-accordion">{{__("$ticket->response_status")}}</td>
                                <td class="tbl-accordion">{{__("$ticket->msg_subject")}}</td>
                                <td class="tbl-accordion">{{__("$ticket->department")}}</td> 
                                <td class="tbl-accordion">{{__("$ticket->id")}}</td>                            
                           
                            </tr>
                        <thead>
                        <tbody>
                        <tr style="border-top-width: 12px;border-top-style: solid;border-top-color: #2b2b35;background-color: #23232D;/* background: top; */">
                                  <td>
                                    <i class="fa fa-check" aria-hidden="true" style="color: greenyellow;"></i>
                                  </td>
                                  <td>
                                    <i class="fa fa-check" aria-hidden="true" style="color: greenyellow;"></i>
                                  </td>
                                  <td>
                                    <i class="fa fa-check" aria-hidden="true" style="color: greenyellow;"></i>
                                  </td>
                                  <td>
                                    <i class="fa fa-times" style="color:red;font-size: x-large;" aria-hidden="true"></i>
                                  </td>
                                  <th scope="row">{{__('Phai Consultant')}}</th>

                              </tr>				
                        </tbody>
                        </table>
                    </td>
                    </tr>                    
                </tbody>
            </table>		
            

 -->
                      <table class="tbl-accordion table" style="color: white;font-size: medium;/* border-right-style: solid; *//* border-right-color: chartreuse; */">
                            <thead style="text-align: center;">
                              <tr style="border-style: hidden;font-size:larger;/* border-bottom: solid #2b2b35; */border-block-width: 18px;">
                                  <th scope="col" style=""> &nbsp;{{__('latest update')}}</th>
                                  <th scope="col" style="/* padding-left: 112px; */">{{__('Status')}}</th>
                                  <th scope="col" style="/* padding-right: 88px; */">{{__('Subject Of Ticket')}}</th>
                                  <th scope="col">{{__('Department')}}</th>

                                  
                              </tr>
                              
                            </thead>
                            <tbody style="text-align: center;">
                              <tr style="border-top-width: 12px;border-top-style: solid;/* border-top-color: #2b2b35; *//* background-color: #23232D; *//* background: top; */">
                                <td colspan=100%>
                                <table style="width:-webkit-fill-available;margin-left: -9px;" cellpadding="0" cellspacing="0" class="tbl-accordion-nested">
                                    <thead style="">
                                        <tr style="">
                                            <td style="width: 30%;" class="tbl-accordion">{{__("$ticket->created_at")}}</td>
                                            <td style="width: 16%;" class="tbl-accordion">{{$ticket->response_status == '0' ? __('Not Responded') : __('Responed')}}</td>
                                            <td class="tbl-accordion">{{__("$ticket->msg_subject")}}</td>
                                            <td style="width: 15%;" class="tbl-accordion">{{__("$ticket->department")}}</td> 
                                                                        
                                    
                                        </tr>
                                    </thead>
                       
                                    <tbody style="display: table-row-group;">
                                        <tr style="background-color: #23232D;">
                                            <td colspan=100%>
                                                <div class="container">
                                                <div class="col-lg-12">
                                                        <div class="art-a art-card" style="">
                                                            <h3 style="margin-bottom: 65px;margin-top: 7px;">{{__('Ticket Information')}}</h3>
                                                            
                                                            <h4 style="text-align-last: end;margin: 20px;align-items:;">{{__('Service For Ticket')}}</h4>
                                                            <div class="art-form-field" style="color:white;text-align:end">
                                                                <input style="text-align: end;color: wh;font-weight: bold;font-size: larger;" id="name" name="name" class="art-input" type="text" placeholder="{{__($ticket->msg_subject)}}">
                                                            </div>

                                                            <h4 style="text-align-last: end;margin: 20px;align-items:;">{{__('Message Text')}}</h4>
                                                            <div class="art-form-field">
                                                                <textarea style="text-align: end;" name="msg" id="" cols="30" rows="10">{{__($ticket->msg)}}</textarea>                                                                
                                                            </div>

                                                            <h4 style="text-align-last: end;margin: 20px;align-items:;">{{__('Attachments')}}</h4>
                                                            <div class="art-form-field" style="background: linear-gradient(159deg, #252532 0%, #23232d 100%);">
                                                              <img style="margin: 25px;" src="http://127.0.0.1:8000/storage/tickets/lYSiyEfjDAMbx2jbcM0IJetNlwpjhSKJHUfkfrcQ.jpg" alt="" style="" width="200" height="300" class="art-input">
                                                            </div>

                                                      </div>
                                                  </div>
                                                </div>
                                            </td>
                                        </tr>				
                                    </tbody>
                                </table>
                                  </td>
                              </tr>
                              
                            </tbody>
                      </table>


            </div>
</div>
 



<style>
/* .tbl-accordion{
  margin: 0 auto;
  width: 900px;
}
  thead{
    background: #d9d9d9;
  }
    .tbl-accordion-nested{
    width: 100%;
    }

    td, th{
      padding: 10px;
      border-bottom: 1px solid #d9d9d9;
    }
    .tbl-accordion-section{
      background:#333;
      color: #fff;
      cursor: pointer;
    }
    tr{
        
    text-align: end;

    }
   */
  table, th, td {
  border:1px;
}
</style>

<script>
$('.tbl-accordion-nested').each(function(){
  var thead = $(this).find('thead');
  var tbody = $(this).find('tbody');
  
  tbody.hide();
  thead.click(function(){
    tbody. slideToggle();
  })
});
  </script>
</script>