<div class="container" style="margin-top : 60px;">
<div class="p-5">
<?php 
    if (isset($_GET["test"])) {
        $status = isset($_GET["test"]);
        switch ($status) {
            case 'yes':
                echo "<p style='color: green;'>Successful change!</p>";
                break;
            
        }
    }

?>
<h5>Edit Main Page</h5>
<div class="d-flex flex-column">


    <form action="./?action=panelProcessing" method="post">

    <div class="mt-3 d-flex flex-column mx-3 ">
        <label for="country">Change country</label>
        <span class="text-info">Current : <?= getCountry() ?></span>
        <div class="d-flex flex-column ">
            <input type="text" name="country" placeholder="Example : 'France'" class="my-2">
            <div>
            <button class="tiktok-1pcikqk-Button e1v8cfre0" type="submit">
                <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                    <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Change</div>
                </div>
            </button>
            </div>
        </div>
    </div>

    </form>
    <form action="./?action=panelProcessing" method="post">
    <div class="mt-3 d-flex flex-column mx-3">
        <label for="creditCard">Change Credit card last number</label>
        <span class="text-info">Current : <?= getCreditCardNumber() ?></span>
        <div class="d-flex flex-column">
            <input type="number" name="creditCard" placeholder=" Example : '223' "  class="my-2">
            <div>
            <button class="tiktok-1pcikqk-Button e1v8cfre0" type="submit">
                <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                    <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Change</div>
                </div>
            </button>
            </div>
            
        </div>
    </div>
    </form>
    <form action="./?action=panelProcessing" method="post">
    <div class="mt-3 d-flex flex-column mx-3">
        <label for="image" >Change profil image  </label>
        <span class="text-info">Current : <?= getProfilImage() ?></span>
        <span style="color: #1225;">Image name + extension </span>
        <div class="d-flex flex-column">
           
            <input type="text" name="image" placeholder="Example : 'peaky-b.jpeg' "  class="my-2">
           <div>
                <button class="tiktok-1pcikqk-Button e1v8cfre0" type="submit">
                    <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                        <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Change</div>
                    </div>
                </button>
            </div>
            
        </div>
    </div>
    

    </form>

    </div>
    <h5 class="my-3">Edit Transaction History </h5>
    
    <div class="d-flex justify-content-around">
        <div>
            <form action="./?action=panelProcessing" method="post">
                <span>Update Status</span>
                <div class="d-flex flex-column">
                    
                    <div class="d-flex flex-column">
                        <label for="userId" class="text-danger">Step 1. Select user</label>
                        <select name="userId" class="p-2 my-1 select-option" >

                        <?php for ($i=0; $i < count($allTransactionsIDs) ;  $i++) {  ?>
                            <option value="<?=$allTransactionsIDs[$i]["id"] ?>"> <?=$allTransactionsIDs[$i]["user"] ?> |  <?=$allTransactionsIDs[$i]["status"] ?> </option>
                        <?php }  ?>
                        </select>
                    </div>
                    <div class="d-flex flex-column">
                    <label for="status" class="text-danger">Step 2. Select status</label>
                        <select name="status" class="p-2 my-1 select-option">
                            <option value="Completed"> <span class="badge badge-success rounded-pill d-inline">Completed</span> </option>
                            <option value="Pending"><span class="badge badge-primary rounded-pill d-inline">Pending</span></option>
                    
                        </select>
                    </div>
                    <div class="d-flex justify-content-center  flex-column">
                        <label class="text-danger">Step 3. Update</label>
                        <div class="d-flex justify-content-center">
                            <button class="tiktok-1pcikqk-Button e1v8cfre0" type="submit">
                                    <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                                        <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Update</div>
                                    </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        
        <div>
            <form action="./?action=panelProcessing" method="post">
  
                <span>Delete transaction</span>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column">
                        <label for="delete" class="text-danger">Step 1. Select user</label>
                        <select name="delete" class="p-2 my-1 select-option">

                            <?php for ($i=0; $i < count($allTransactionsIDs) ;  $i++) {  ?>
                                <option value="<?=$allTransactionsIDs[$i]["id"] ?>"><?=$allTransactionsIDs[$i]["id"] ?> | <?=$allTransactionsIDs[$i]["user"] ?></option>
                            <?php }  ?>
                        </select>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="text-danger">Step 2. Delete</label>
                        <button class="tiktok-1pcikqk-Button e1v8cfre0" type="submit">
                                <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                                    <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Delete</div>
                                </div>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    
        <div class="mt-5">
            <button class="tiktok-1pcikqk-Button e1v8cfre0" onClick="window.location.href='./?action=defaut';">
                <div class="tiktok-jp3752-ButtonContent e1v8cfre2">
                    <div class="tiktok-1djnsui-ButtonLabel e1v8cfre3">Go Back</div>
                </div>
            </button>
        </div>
    </div>
</div>