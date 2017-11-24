package classes;

public class Email {
	private String email;
	private boolean ehPrincipal;

	public Email() {
	}

	public Email(String email) {
		this.setEmail(email);
		this.setEhPrincipal(false);
	}

	public Email(String email, boolean ehPrincipal) {
		this.setEmail(email);
		this.setEhPrincipal(ehPrincipal);
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getEmail() {
		return this.email;
	}

	public void setEhPrincipal(boolean ehPrincipal) {
		this.ehPrincipal = ehPrincipal;
	}

	public boolean getEhPrincipal() {
		return this.ehPrincipal;
	}
}