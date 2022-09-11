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
                                            <td class="tbl-accordion">{{__("$ticket->response_status")}}</td>
                                            <td class="tbl-accordion">{{__("$ticket->msg_subject")}}</td>
                                            <td style="width: 15%;" class="tbl-accordion">{{__("$ticket->department")}}</td> 
                                                                        
                                    
                                        </tr>
                                    </thead>
                       
                                    <tbody style="display: table-row-group;">
                                        <tr style="border-top-width: 12px;border-top-style: solid;border-top-color: #2b2b35;background-color: #23232D;/* background: top; */">
                                            <td colspan=100%>
                                                <div class="container">
                                                <div class="col-lg-12">
                                                        <!-- contact form frame -->
                                                        <div class="art-a art-card" style="">
                                                            <!-- contact form -->
                                                            <!-- <form id="form" class="art-contact-form" style=""> -->
                                                            <!-- form field -->
                                                            <div class="art-form-field" style="">
                                                                <!-- name input -->
                                                                <input id="name" name="name" class="art-input" type="text" placeholder="الأسم" style="width: 40%;float: left;">
                                                                <!-- label -->
                                                                

                                                                <input id="email" name="email" class="art-input" type="email" placeholder="الأيميل" style="width: 40%;float: right;">

                                                            </div>
                                                            <!-- form field end -->
                                                            <!-- form field -->
                                                            <div class="art-form-field">
                                                                <!-- department input -->
                                                                <!-- <input id="dep" name="dep" class="art-input" type="text" placeholder="Department"  style="width: 30%;margin-right: 40px;"> -->
                                                                <!-- label -->
                                                                <select id="imp" name="imp" type="text" style="margin-top: 40px;margin-right: 75px;width: 28%;float: left;">
                                                                                            <option value="none" style="color:white;" selected="">الأهمية</option>
                                                                                            <option value="father" style="color:white;">عاجله</option>
                                                                                            <option value="father&amp;grandfather" style="color:white;">متوسطه</option>
                                                                                            <option value="father&amp;nickname" style="color:white;">عاديه</option>
                                                                </select>

                                                                <select id="service" name="service" class="art-input" type="text" placeholder="" style="margin-top: 40px;width: 28%;float: left;margin-right: 58px;">
                                                                    <option value="none" style="color:white;" selected="">الخدمة المتعلقة بالتذكرة</option>
                                                                    <option value="father" style="color:white;">بدون</option>
                                                                    <option value="father&amp;grandfather" style="color:white;">مع</option>
                                                                </select>

                                                                <!-- <input id="service" name="service" class="art-input" type="text" placeholder="Service"  style="/* float: right; */width: 30%;margin-right: 42px;"> -->
                                                                

                                                                <select id="dep" name="dep" class="art-input" type="text" placeholder="" style="margin-top: 40px;width: 28%;">
                                                                    <option value="none" style="color:white;" selected="">القسم</option>
                                                                    <option value="Support" style="color:white;">الدعم</option>
                                                                    <option value="Invoices" style="color:white;">الفواتير</option>
                                                                    <option value="Sales" style="color:white;">المبيعات</option>
                                                                </select>
                                                                <!-- <input id="imp" name="imp" class="art-input" type="text" placeholder="Email"  style="width: 30%;"> -->
                                                                
                                                            </div>
                                                            <!-- form field end -->
                                                            
                                                            <!-- </form> -->
                                                            <!-- contact form end -->
                                                      </div>
                                                      <!-- contact form frame end -->
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