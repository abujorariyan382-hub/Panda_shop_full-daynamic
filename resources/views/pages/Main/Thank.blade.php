@include('common-section.navbar')

<div class="container">
    <div class="thank-container">
        <div class="header">
            <h2>Thank you for your order!</h2>
        </div>
        <div class="invoice">
            <div class="inv-num d_flex">
                <p>Invoice ID: </p>
                <p>Id</p>



            </div>
            <div class="inv-date d_flex">
                <p>Invoice Date</p>
                <p>2006</p>

            </div>
        </div>
        <hr class="hr-1">

        <div class="information">
            <div class="customer_info line">
                <h5>Cusomter Information</h5>
                <p><span class="bold">Name:</span> <span>Abujor</span> </p>
                <p><span class="bold">Phone:</span> <span>****</span> </p>

                <p><span class="bold">Address:</span> <span>****</span> </p>

                <p><span class="bold">Payment:</span> <span>*****</span> </p>


            </div>
            <div class="office_info line">
                <h5>Araf Trust</h5>


                <p><span class="bold">Phone:</span> <span>01234567890</span> </p>
                <p><span class="bold">Email:</span> <span>araftrust@gmail.com</span> </p>


                <p><span class="bold">Address:</span> <span>Dhaka,Bangladesh</span> </p>



            </div>
        </div>
        <hr>

        <div class="order-tetail">
            <h4>Order Details</h4>

            <table class="table">
                <thead >
                    <tr>
                        <th>S.N</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Net Pay</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            

        </div>

        <div class="price mt-2">
            <div></div>
            <div class="price_info">
              <div class="sm">
                <p>SubTotal:</p>
                <p>0</p>
              </div>

            <div class="sm">
                <p>Shipping:</p>
                <p class="sm">0</p>
            </div>

            <div class="sm">
                <p>Total:</p>
                <p>0</p>
            </div>
              
            </div>
        </div>

        <div class="contiue_shoping text-center mt-5">
            <div class="support_text">
                <p>We spprecaite your busniess! if you have any question please contact our supported</p>
            </div>
            <div class="btn_countiue">
                <form action="">
                    <input type="submit" class="btn btn-warning" value="Contiue Shoping">
                </form>
            </div>
        </div>



    </div>
</div>



@include('common-section.Footer')


<style>
    .thank-container {
        width: 1000px;
        height: 700px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        margin: 50px auto;
        border-radius: 5px;
        padding: 30px;
    }

    .header h2 {
        text-align: center;
        color: orange;
        padding-top: 30px;

    }

    .d_flex {
        display: flex;
        gap: 0.5rem;
    }

    .invoice {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .information {
        display: flex;
        justify-content: space-between;


    }

    .line p {
        line-height: 10px;
    }

    .bold {
        font-weight: 500;
    }

    .price{
        display: flex;
        justify-content: space-between;
    }

    .price_info{
        width: 400px;
        height: auto;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      padding: 10px;
      font-weight: 500;
    }

    .sm p{
        line-height: 10px;
       
    }

    .sm{
        display: flex;
        justify-content: space-between
    }


    
</style>