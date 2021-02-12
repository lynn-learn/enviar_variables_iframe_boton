<style>

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<form  id='pdfForm'  action="1_2.php?V=12" method="post" target="urlClaimedIf"> 
    <input  name='user_id' type='hidden' value='12356'>
    <button type="submit" id="find_docs" class="btn btn-success">Send form</button>
</form>

<iframe id='urlClaimedIf' name="urlClaimedIf" style='margin-top:10px;position:relative;width:100%;overflow-y: hidden;' allowFullScreen  frameborder="0"  height="80"  src='1_2.php?V=12'></iframe>


