module informatique
import general

class Reseau
	super Graphe	

	redef type U : Cable   	
	redef type V : Ordinateur
	init
	do
		print "appel de Construct Reseau"+self.to_s
	end
end

class Cable
	super Aret

	redef type T : Reseau   	
	redef type V : Ordinateur

	init
	do
		print "appel de Construct Cable"+self.to_s
	end
end

class Ordinateur
	super Sommet

	redef type T : Reseau   	
	redef type U : Cable

	init
	do
		print "appel de Construct Ordinateur"+self.to_s
	end
end
