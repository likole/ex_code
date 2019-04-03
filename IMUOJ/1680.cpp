#include<iostream>
using namespace std;
class Complex
{
public:
	int real, imag;
	Complex() { real = 0, imag = 0; }
	void set(int m = 0, int n = 0) { real = ++m, imag = ++n; }
	friend istream& operator>>(istream&, Complex&);
	friend ostream& operator<<(ostream&, Complex);
	Complex operator+(Complex);
	Complex operator-(Complex);
};
istream& operator>>(istream& in, Complex &m)
{
	int r,i;
	in >> r;
	in >> i;
	m.set(r,i);
	return in;
}
ostream& operator<<(ostream& out, Complex m)
{
	out << m.real;
	if (m.imag >= 0)out << "+";
	out<< m.imag << "i\n";
	return out;
}
Complex Complex::operator+(Complex m)
{
	Complex t;
	t.real = real + m.real;
	t.imag = imag + m.imag;
	return t;
}
Complex Complex::operator-(Complex m)
{
	Complex t;
	t.real = real - m.real;
	t.imag = imag - m.imag;
	return t;
}
int main()
{
	Complex a, b;
	char op;
	cin >> a;
	cin >> b;
	cin >> op;
	if (op == '+')
	{
		cout << a + b;
	}
	else
	{
		cout << a - b;
	}
}