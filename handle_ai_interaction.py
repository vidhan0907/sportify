from dotenv import load_dotenv
import streamlit as st
import os
import google.generativeai as genai

# Load environment variables
load_dotenv()

# Configure the API key for Google Generative AI
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))

# Function to load Gemini Pro model and get responses
model = genai.GenerativeModel("gemini-pro")
chat = model.start_chat(history=[])

def get_gemini_response(question):
    response = chat.send_message(question, stream=True)
    return response

# Initialize Streamlit app settings
st.set_page_config(page_title="Our Expert")
# Custom CSS for background color
custom_css = """
<style>
body {
    background-color: #c9d6ff;
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
}
</style>
"""

# Display custom CSS using markdown
st.markdown(custom_css, unsafe_allow_html=True)

# Header for the app
st.header("Sportify- Our AI Expert")
st.write("For Fitness Related Suggestions")
# Initialize session state for chat history if it doesn't exist
if 'chat_history' not in st.session_state:
    st.session_state['chat_history'] = []

# Input field for user to enter question
user_input = st.text_input("Input: ", key="input")

# Button to submit the question
submit = st.button("Ask")

# Process user input and display response
if submit and user_input:
    response = get_gemini_response(user_input)
    
    # Add user query and response to session state chat history
    st.session_state['chat_history'].append(("You", user_input))
    st.subheader("Solution: ")
    
    # Display each chunk of the response
    for chunk in response:
        st.write(chunk.text)
        st.session_state['chat_history'].append(("Bot", chunk.text))

# Display chat history
# st.subheader("The Chat History is")
for role, text in st.session_state['chat_history']:
    # st.write(f"{role}: {text}")
    pass

# HTML anchor tag to redirect back to main.php
st.markdown('<a href="http://localhost/SPORTIFY/main.php" target="_self">Back to Main</a>', unsafe_allow_html=True)
