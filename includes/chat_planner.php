
<style>
<?php include 'css/style.css'; ?>
</style>

<?php if (isset($_SESSION['user_id']) && (int)$_SESSION['role_id'] === 2): ?>
<!-- POPUP BUTTON -->
<div class="chat-trigger">

    <button class="planner-chat-icon" onclick="openPlannerPopup()">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="22"
             height="22"
             fill="currentColor"
             class="bi bi-chat-dots"
             viewBox="0 0 16 16">

            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
        </svg>
    </button>

    <button class="planner-chat-btn" onclick="openPlannerPopup()">
        Chat with Planner
    </button>

</div>


<!-- POPUP -->
<div class="planner-popup" id="plannerPopup">

    <div class="planner-popup-header">
        <div class="planner-info">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
            <div>
                <h3>Wedding Planner</h3>
                <span>Online now</span>
            </div>
        </div>

        <button class="close-popup" onclick="closePlannerPopup()">✕</button>
    </div>

    <div class="planner-chat-body">

        <div class="planner-message planner">
            Hello 👋 How can we help plan your special day?
        </div>

        <div class="planner-message user">
            I need help finding venues.
        </div>

    </div>

    <div class="planner-chat-footer">
        <input type="text" placeholder="Type your message...">

   <button class="send-btn">
    <svg xmlns="http://www.w3.org/2000/svg"
         width="20"
         height="20"
         fill="currentColor"
         class="bi bi-send send-icon"
         viewBox="0 0 16 16">

        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
    </svg>
</button>

<?php endif; ?>
    </div>

</div>

<script>
    function openPlannerPopup() {
    document.getElementById("plannerPopup").style.display = "flex";
}

function closePlannerPopup() {
    document.getElementById("plannerPopup").style.display = "none";
}
</script>