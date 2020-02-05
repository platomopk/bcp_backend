<div id="tab3" class="tab-pane fade" style="height:1920px;background-color: #EEEEEE;padding:15px;">
    

    <div class="center-block text-center" style="border:1px solid #333;padding-top:5px;padding-bottom:5px;">
		<label class="radio-inline" style="text-decoration: underline;">
            <input id="complaintsHome" type="radio" name="complaintsradio" checked>HOME
        </label>
        <label class="radio-inline" style="text-decoration: underline;">
            <input id="complaintsLog" type="radio" name="complaintsradio">LOGS
        </label>
    </div>

    <section id="complaintsHomeSection">
	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Complaints Summary</h3>
	        <p style="text-align:justify;">These complaints are grouped on the date they were originated on. </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="complaintsummarytable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Date</th>
	                    <th># Of Complaints Handled</th>
	                    <th># Of Complaints Completed</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>

	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Open Complaints</h3>
	        <p style="text-align:justify;">These are the complaints that are not handled as of now. </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="opencomplaintstable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Date</th>
	                    <th>Category</th>
	                    <th>Title</th>
	                    <th>Message</th>
	                    <th>Status</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>
    </section>

    <section id="complaintsLogsSection" style="display: none">
	    <br>
	    <div>
	        <h3 style="margin: 0px;padding:0px;">Complaints Logs</h3>
	        <p style="text-align:justify;">These complaints are pulled chronologically </p>
	    </div>

	    <div>
	        <table class="table table-bordered table-reponsive table-hovered" id="complaintlogtable">
	            <thead>
	                <tr style="background-color: #333; color:#fff">
	                    <th>Complaint #</th>
	                    <th>Complaint Date</th>
	                    <th>Name</th>
	                    <th>Address</th>
	                    <th>Complaint Type</th>
	                    <th>Status</th>
	                    <th>Closure Date</th>
	                    <th>Resource</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
	    </div>
    </section>


</div>