package classes;

import java.net.URL;
import java.util.List;
import java.util.ArrayList;

public class Expositor
{
	private String nome;
	private String marca;
	private URL urlSite;
	private URL urlFacebook;
	private URL urlInstagram;
	private List<Telefone> telefones;
	private List<Email> emails;
	private List<Endereco> enderecos;

	public Expositor() {
		telefones = new ArrayList<Telefone>();
		emails = new ArrayList<Email>();
		enderecos = new ArrayList<Endereco>();
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setMarca(String marca) {
		this.marca = marca;
	}

	public String getMarca() {
		return this.marca;
	}

	public void setUrlSite(URL urlSite) {
		this.urlSite = urlSite;
	}

	public URL getUrlSite() {
		return this.urlSite;
	}

	public void setUrlFacebook(URL urlFacebook) {
		this.urlFacebook = urlFacebook;
	}

	public URL getUrlFacebook() {
		return this.urlFacebook;
	}

	public void setUrlInstagram(URL urlInstagram) {
		this.urlInstagram = urlInstagram;
	}

	public URL getUrlInstagram() {
		return this.urlInstagram;
	}

	public void setTelefones(List<Telefone> telefones) {
		this.telefones = telefones;
	}

	public List<Telefone> getTelefones() {
		return this.telefones;
	}

	public void setEmails(List<Email> emails) {
		this.emails = emails;
	}

	public List<Email> getEmails() {
		return this.emails;
	}

	public void setEnderecos(List<Endereco> enderecos) {
		this.enderecos = enderecos;
	}

	public List<Endereco> getEnderecos() {
		return this.enderecos;
	}

	public void adicionaTelefone(String telefone, boolean ehPrincipal) {
		telefones.add(new Telefone(telefone, ehPrincipal));
	}

	public void removeTelefone(Telefone telefone) {
		
	}

	public void adicionaEmail(String email, boolean ehPrincipal) {
		emails.add(new Email(email, ehPrincipal));
	}

	public void removeEmail(Email email) {
		// @TODO

	}

	public void adicionaEndereco(Endereco endereco) {
		enderecos.add(endereco);
	}

	public void removeEndereco(Endereco endereco) {
		// @TODO
	}

}
