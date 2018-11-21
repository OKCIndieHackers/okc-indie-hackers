class ApplicationController < ActionController::Base
  def showLanding  
    render template: "landing" 
  end
end
