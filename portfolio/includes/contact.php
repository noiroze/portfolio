<?php
/**
 * Created by PhpStorm.
 * User: Erica
 * Date: 5/4/17
 * Time: 1:13 PM
 */
?>
    <div id="contact-background">
        <section id="contact">
            <div class="row, container">
                <h2>Contact</h2>

                <div class="col-sm-6 col-sm-offset-3">
                    <h3>Send me a message</h3>
                    <form action="thankyou.php" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="h4">Name:</label>
                                <input type="text" id="u_name" class="form-control" name="u_name" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="h4">Email:</label>
                                <input type="email" id="u_email" class="form-control" name="u_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4">Subject:</label>
                            <input type="text" id="subj" class="form-control" name="subj" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="h4">Message:</label>
                            <textarea id="message" class="form-control" rows="5" name="message" required></textarea>
                        </div>
                        <button type="submit" id="form-submit" class="btn btn-lg pull-right" value="Submit">Submit
        </button>
                </div>
            </div>
        </section>

        </main>
    </div>