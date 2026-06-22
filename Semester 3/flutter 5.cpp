void main()
{
  int n=10, m=60, p;
  p=m+n;
  print(p);

  {
    int n=10, m=10, p;
    p=m+n;
    print(p);
  }

  {
    int n=10, m=50, p;
    p=m-n;
    print(p);
  }

  {
    int n=10, m=40, p;
    double p2=m/n;
    print(p2);
  }
if (n>5)
  {
  print('Valid');
  }
else
  {
  print('Invalid');
  }
}