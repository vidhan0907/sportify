from flask import Flask, render_template, request, jsonify, session
import pywhatkit as kit
import time
import random

app = Flask(__name__)
app.secret_key = 'supersecretkey'  # Necessary for session management

# Function to generate a four-digit random number
def generate_random_number():
    return random.randint(1000, 9999)

# Function to send WhatsApp message after a delay
def send_whatsapp_message_after_delay(phone_number, message, delay_seconds):
    try:
        # Wait for the specified delay
        #time.sleep(delay_seconds)
        
        # Send the message instantly
        kit.sendwhatmsg_instantly(phone_number, message,delay_seconds)
        return "Message sent successfully!"
    except Exception as e:
        return f"An error occurred: {e}"

@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "POST":
        phone_number = request.form["phone_number"]
        delay_seconds = int(request.form["delay_seconds"])
        
        # Generate a random number
        random_number = generate_random_number()
        message = f"hi"
        
        # Store the random number in session for verification
        session['verification_code'] = random_number
        
        result = send_whatsapp_message_after_delay(phone_number, message, 5)
        return render_template("verify.html", result=result)
    
    return render_template("index.html", result=None)

@app.route("/verify", methods=["POST"])
def verify():
    entered_code = request.form["verification_code"]
    stored_code = session.get('verification_code')
    
    if stored_code and int(entered_code) == stored_code:
        return "Verification successful!"
    else:
        return "Verification failed. Please try again."

if __name__ == "__main__":
    app.run(debug=True)
