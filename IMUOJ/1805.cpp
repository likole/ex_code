#include<iostream>
#include<cstdlib>
using namespace std;
class complex
{
public:
	double real;
	double imag;
	complex(double r = 0, double i = 0) { real = r; imag = i; }
	void set(double r, double i) { real = r; imag = i; }
	void show();
	void show_add(complex x);
	void show_sub(complex x);
	void show_mul(complex x);
};
void complex::show()
{
	if (real != 0)cout << real;
	if (real != 0 && imag > 0)cout << "+";
	if (imag != 0 && imag != 1&&imag!=-1)cout << imag;
	if (imag == -1)cout << "-";
	if (imag != 0)cout << "i";
	if (real == 0 && imag == 0)cout << "0";
}
void complex::show_add(complex x)
{
	double a, b;
	a = this->real + x.real;
	b = this->imag + x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b!=1&&b!=-1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
void complex::show_sub(complex x)
{
	double a, b;
	a = this->real - x.real;
	b = this->imag - x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b != 1 && b != -1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
void complex::show_mul(complex x)
{
	double a, b;
	a = this->real * x.real - this->imag*x.imag;
	b = this->imag * x.real + this->real*x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b != 1 && b != -1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
int main()
{
	int i;
	complex a, b;
	double r1, i1, r2, i2;
	while (cin >> i)
	{
		if (i == 0)break;
		cin >> r1 >> i1 >> r2 >> i2;
		a.set(r1, i1);
		b.set(r2, i2);
		cout << "(a):";
		a.show();
		cout << endl;
		cout << "(b):";
		b.show();
		cout << endl;
		if (i == 1)
		{
			cout << "(+):";
			a.show_add(b);
			cout << endl;
		}
		if (i == 2)
		{
			cout << "(-):";
			a.show_sub(b);
			cout << endl;
		}
		if (i == 3)
		{
			cout << "(*):";
			a.show_mul(b);
			cout << endl;
		}
	}
	return 0;
}