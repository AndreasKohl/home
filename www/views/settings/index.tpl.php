<div class="settings">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 settings">

            <form method="post" class="form-vertical row-border">
                <input type="hidden" name="send" value="save">

                <h2 class="headline"><?php echo SET_HEADLINE; ?></h2>

                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#base" aria-controls="base" role="tab"
                                                                  data-toggle="tab">Grundeinstellungen</a></li>
                        <li role="presentation"><a href="#weather" aria-controls="weather" role="tab" data-toggle="tab">Wetter</a>
                        </li>
                        <li role="presentation"><a href="#cal" aria-controls="cal" role="tab"
                                                   data-toggle="tab">Kalender</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                                   data-toggle="tab">Settings</a></li>
                    </ul>

                    <!-- Base Tab panes -->
                    <div class="tab-content col-xs-12">
                        <div role="tabpanel" class="tab-pane active" id="base">

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_timezone; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_timezone" value="<?php echo $settings['timezone']; ?>">
                                    <select name="timezone" id="timezone" class="form-control">
                                        <?php
                                        foreach ($timezones as $region => $list) {
                                            echo '<optgroup label="' . $region . '" id="' . $region . '">' . "\n";
                                            foreach ($list as $timezone => $name) {
                                                echo '<option value="' . $timezone . '">' . $name . '</option>' . "\n";
                                            }
                                            echo '<optgroup>' . "\n";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_country_code; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_country_code"
                                           value="<?php echo $settings['country_code']; ?>">
                                    <select name="country_code" id="country_code" class="form-control">
                                        <?php
                                        foreach ($countries as $key => $country) {
                                            echo '<option value="' . $key . '">' . $key . ' - ' . $country . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_sarkasmus; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_sarkasmus_activ"
                                           value="<?php echo $settings['sarkasmus']; ?>">
                                    <select name="sarkasmus" id="sarkasmus_activ" class="form-control">
                                        <option value="true">Aktiv</option>
                                        <option
                                            value="false" <?php echo($settings['sarkasmus'] == 'false' ? 'selected' : ''); ?>>
                                            Inaktiv
                                        </option>
                                    </select>
                                    <br>
                                </div>
                            </div>

                        </div>

                        <!-- Weather Tab panes -->

                        <div role="tabpanel" class="tab-pane" id="weather">


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_city; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="city" value="<?php echo $settings['city']; ?>"
                                           class="form-control"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_api; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="weather_api"
                                           value="<?php echo $settings['weather_api']; ?>"
                                           class="form-control"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_sunrise; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_sunrise" value="<?php echo $settings['sunrise']; ?>">
                                    <select name="sunrise" id="sunrise" class="form-control">
                                        <option value="true">Aktiv</option>
                                        <option value="false">Deaktiv</option>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_weather; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_weather" value="<?php echo $settings['weather']; ?>">
                                    <select name="weather" id="weather" class="form-control">
                                        <option value="true">Aktiv</option>
                                        <option value="false">Deaktiv</option>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_units; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_weather_option"
                                           value="<?php echo $settings['weather_option']; ?>">
                                    <select name="weather_option" id="weather_option" class="form-control">
                                        <option value="c_kms">Celsius - km/s</option>
                                        <option value="k_mps">Kelvin - m/s</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <!-- Calender Tab panes -->

                        <div role="tabpanel" class="tab-pane" id="cal">


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_gcal; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_gcal_ical_activ"
                                           value="<?php echo $settings['gcal_ical_activ']; ?>">
                                    <select name="gcal_ical_activ" id="gcal_ical_activ" class="form-control">
                                        <option value="true">Aktiv</option>
                                        <option value="false">Deaktiv</option>
                                    </select>
                                    <br>
                                </div>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_gcal_url; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="gcal_ical" value="<?php echo $settings['gcal_ical']; ?>"
                                           class="form-control"><br>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <hr>
                                </div>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_caldav; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="a_oc_ical" value="<?php echo $settings['oc_ical']; ?>">
                                    <select name="oc_ical" id="oc_ical" class="form-control">
                                        <option value="true">Aktiv</option>
                                        <option value="false">Deaktiv</option>
                                    </select>
                                    <br>
                                </div>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_user; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="oc_user" id="oc_user"
                                           value="<?php echo $settings['oc_user']; ?>"
                                           class="form-control"><br>
                                </div>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_pass; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="oc_pass" id="oc_pass"
                                           value="<?php echo $settings['oc_pass']; ?>"
                                           class="form-control"><br>
                                </div>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-xs-12 col-sm-12 col-md-12 control-label"><?php echo SET_caldav_url; ?></label>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="oc_ical_url" id="oc_ical_url"
                                           value="<?php echo $settings['oc_ical_url']; ?>" class="form-control"><br>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> <?php echo BTN_save; ?>
                        </button>
                        <br>
                        <br>
                    </div>
                </div>
            </form>


        </div>


    </div>
</div>




