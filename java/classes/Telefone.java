package classes;

public class Telefone {
	/** Attributes */
	private String numero;
	private boolean ehPrincipal;

	public Telefone(String numero) {
		this.setNumero(numero);
		this.setEhPrincipal(true);
	}

	public Telefone(String numero, boolean ehPrincipal) {
		this.setNumero(numero);
		this.setEhPrincipal(ehPrincipal);
	}

	public void setNumero(String numero) {
		this.numero = numero;
	}

	public String getNumero() {
		return this.numero;
	}

	public void setEhPrincipal(boolean ehPrincipal) {
		this.ehPrincipal = ehPrincipal;
	}

	public boolean getEhPrincipal() {
		return this.ehPrincipal;
	}
}