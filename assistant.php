<link rel="stylesheet" href="../assets/CSS/assistant.css">

<a onclick="showAssistant()" class="float">
    <img src="../assets/Images/assistant.png" alt="">
</a>
<div class="hide_desc">Chat with Amy.</div>

<div class="assistant_panel" id="assistant_panel">
    <div class="pane_header" onclick="hideAssistant()">Amy Assistant</div>
    <div class="">
        <span class="head_assistant"><img src="../assets/Images/assistant.png" alt=""> &nbsp; Ana</span>
        <p class="conversation_assistant">Hi, I'm your assistant Amy, how can I help you?</p>
    </div>
    <div class="chat_area form-input"><input type="text" name="response" placeholder="Ask now" tabindex="50" required></div>
</div>

<script>
    function showAssistant() {
        document.getElementById('assistant_panel').style.display = "block";
    }

    function hideAssistant() {
        document.getElementById('assistant_panel').style.display = "none";
    }
</script>