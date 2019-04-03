#include<iostream>
using namespace std;
class complex
{
    double a;
    double b;
public:
    complex(int m = 0, int n = 0) :a(m), b(n) {};
    friend complex operator+(const complex &c1, const complex & c2);
    friend complex operator-(complex c1, complex c2);
    friend istream& operator>>(istream &i, complex &c);
    friend ostream& operator<<(ostream &o, complex &c);
    complex operator++()
    {
        return complex(++a, b);
    }
    complex operator++(int)
    {
        return complex(a++, b);
    }
    friend complex operator--(complex &c);
    friend complex operator--(complex &c, int);
};
complex operator--(complex &c)
{
    return complex(--c.a, c.b);
}
complex operator--(complex &c, int)
{
    return complex(c.a--, c.b);
}
complex operator+(const complex &c1, const complex & c2)
{
    complex ans(c1.a + c2.a, c1.b + c2.b);
    return ans;
}
complex operator-(complex c1, complex c2)
{
    complex ans(c1.a - c2.a, c1.b - c2.b);
    return ans;
}
istream& operator>>(istream &i, complex &c)
{
    int m, n;
    i >> m >> n;
    c.a = m;
    c.b = n;
    return i;
}
ostream& operator<<(ostream &o, complex &c)
{
    o << "(" << c.a << "," << c.b << ")" << endl;
    return o;
}
int main()
{
    int i;
    complex c1, c2, c3;
    cin >> c1;
    cin >> c2;
    c3 = c1 + c2;
    cout << c3;
    c3 = c1 - c2;
    cout << c3;
    for (i = 1; i <= 3; i++)
        c3 = c1++;
    cout << c1;
    cout << c3;
    for (i = 1; i <= 3; i++)
        c3 = c2--;
    cout << c2;
    cout << c3;
    c3 = ++c1;
    cout << c1;
    cout << c3;
    c3 = --c2;
    cout << c2;
    cout << c3;
}