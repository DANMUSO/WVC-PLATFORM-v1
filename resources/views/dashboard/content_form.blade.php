<form id="updateFormcontent">
                        @csrf
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="vid" value="{{ $content[0]->id}}" name="vid">
                            <label for="formGroupExampleInput">Video URL</label>
                            <input type="text" class="form-control" id="vurl" name="vurl" value="{{ $content[0]->url}}">
                            </div>
                            </div>
                            <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Video Title</label>
                                <input type="text" class="form-control" id="vtitle" name="vtitle" value="{{ $content[0]->title}}">
                            </div>
                            </div>
                            <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Video Description</label>
                                <input type="text" class="form-control" id="vdesc" name="vdesc" value="{{ $content[0]->description}}">
                            </div>
                            </div>
                            <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Venue</label>
                                <input type="text" class="form-control" id="vvenue" name="vvenue" value="{{ $content[0]->location}}">
                            </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Live</label>
                                    <select  class="form-control" id="vlive" name="vlive">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Language</label>
                                <select  class="form-control" id="vlanguage" name="vlanguage">
                                <option value="{{ $content[0]->language}}">{{ $content[0]->language}}</option>
                                <option value="English">English</option>
                                <option value="Kiswahili">Kiswahili</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Preacher</label>
                                <select  class="form-control" id="vpastor_id" name="vpastor_id">
                                <option value="{{ $content[0]->pastor_id}}">{{ $content[0]->pastor_id}}</option>
                                <option value="1">John</option>
                                <option value="2">Peter</option>
                                <option value="3">Mwangi</option>
                                </select>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" name="submit" onclick="updatecontentdetails()" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                        