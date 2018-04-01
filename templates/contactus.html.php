<!-- This is the form -->
            <section class="contactus">
                <h2>Contact Us</h2>
                <p>Please fill out your contact details and your question below and we shall get back to you promptly!</p>
                    <form method="post">
                        <fieldset>
                            <p>
                                <label for="firstName">First name:</label>
                                <input type="text" name="firstName" id="firstName" value="">
                            </p>
                            <p>
                                <label for="lastName">Last name:</label>
                                <input type="text" name="lastName" id="lastName" value="">
                            </p>
                            <p>
                                <label for="phone">Contact Number:</label>
                                <input type="text" name="phone" id="phone" value="">
                            </p>
                            <p>
                                <label for="email">Contact Email:</label>
                                <input type="email" name="email" id="email" value="">
                            </p>
                            <p>
                                <label for="question">Your Question:</label>
                                <textarea name="question" id="question" rows="6" cols="50"></textarea>
                            </p>
                        </fieldset>
                        <div class="formbutton">
                            <p>
                                <input type="reset" name="resetButton" id="resetButton" value="Start over">
                                <input type="submit" name="submitButton" id="submitButton" value="Ask us!">
                            </p>
                        </div>
                    </form>
            </section>
