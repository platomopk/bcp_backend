<div id="tab2" class="tab-pane fade" style="height:1920px;background-color: #EEEEEE; padding:15px;">

    <div class="center-block text-center" style="border:1px solid #333;padding-top:5px;padding-bottom:5px;">
		<label class="radio-inline" style="text-decoration: underline;">
            <input id="securityHome" type="radio" name="securityradio" checked>HOME
        </label>
        <label class="radio-inline" style="text-decoration: underline;">
            <input id="securityLog" type="radio" name="securityradio">LOGS
        </label>
    </div>

    <section id="securityHomeSection">
	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Panic Summary</h3>
	        <p style="text-align:justify;">These panic requests are grouped on the date they were originated on. </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="panicsummarytable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Date</th>
	                    <th># Of Panic Requests Handled</th>
	                    <th># Of Panic Requests Completed</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>

	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Open Panic Requests</h3>
	        <p style="text-align:justify;">These are the panic requests that are not handled as of now. </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="openpanictable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Date</th>
	                    <th>Category</th>
	                    <th>Responder's Name</th>
	                    <th>Status</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>
    </section>

    <section id="securityLogsSection" style="display: none">
	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Security Logs</h3>
	        <p style="text-align:justify;">These panic alerts are pulled chronologically </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="paniclogtable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Panic #</th>
	                    <th>Panic Date</th>
	                    <th>Name</th>
	                    <th>Address</th>
	                    <th>Panic Type</th>
	                    <th>Responder's Name</th>
	                    <th>Closure Authority</th>
	                    <th>Closure Date</th>
	                    <th>Status</th>
	                    <th>Images</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>
    </section>

</div>