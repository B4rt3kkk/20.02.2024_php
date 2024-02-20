#include <math.h>
#include <iostream>

using namespace std;

class EP {
public:
	int m;
	const int g = 10;
	int h;


public:
	float wynik() {
		return this->m * this->h * this->g;
	}

};
class EK {
public:
	int m;
	int v;


public:
	float wynik() {
		return (this->m * pow(this->v, 2)) / 2;
	}

};
class EM {
public:
	EK ek;
	EP ep;
	float wynikEM() {
		return ek.wynik() + ep.wynik();
	}

};
class uruchom {
public:
	void ep() {
		EP ep;
		ep.h = 5;
		ep.m = 2;
		cout << "EP = " << ep.wynik() << endl;
	}
	void ek() {
		EK ek;
		ek.v = 2;
		ek.m = 5;
		cout << "EK = " << ek.wynik() << endl;
	}
	void em() {
		EM em;
		cout << "EM = " << em.wynikEM() << endl;
	}
	void start() {
		this->ep();
		this->ek();
		this->em();
	}
};


int main()
{
	uruchom wykonaj;
	wykonaj.start();



	return EXIT_SUCCESS;
}
