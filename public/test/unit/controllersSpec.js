'use strict';

/* jasmine specs for controllers go here */

describe('Blog controllers', function(){
  
  describe('postListCtrl', function(){
  	var scope, ctrl;

  	beforeEach(function() {
  		scope={},
  		ctrl = new postListCtrl(scope);
  	});

	  it('should create posts model with 3 posts', function() {
	    //spec body
	    expect(scope.posts.length).toBe(3);
	  });

  });
});